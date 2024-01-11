@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="card">               
        <div class="card-body">            
            <div id="pdfContainer">
                 <embed src="{{asset('files/'.$sale->file_url)}}#toolbar=0" type="application/pdf" width="100%" height="1000px" frameborder="0" allowfullscreen sandbox="allow-same-origin allow-scripts"></embed>

                 <div id="contextMenuMessage">Right-click is disabled</div>
            </div>                                    
        </div>
    </div>
</div>
 
@endsection

@section('styles')

    <style>
       

        #pdfContainer {
            position: relative;
        }

        #contextMenuMessage {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: none;
        }
    </style>
@endsection

@push('scripts')
    <script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });

        const pdfContainer = document.getElementById('pdfContainer');
        const contextMenuMessage = document.getElementById('contextMenuMessage');

        pdfContainer.addEventListener('contextmenu', function (event) {
            event.preventDefault();
            contextMenuMessage.style.display = 'block';
            setTimeout(() => {
                contextMenuMessage.style.display = 'none';
            }, 2000); 
        });
    </script> 
@endpush