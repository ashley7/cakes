@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="card">               
        <div class="card-body"> 
            
             <embed src="{{asset('files/'.$sale->file_url)}}" width="100%" height="1000px" allowfullscreen sandbox="allow-same-origin allow-scripts"></div>

                                    
        </div>
    </div>
</div>
 
@endsection

@push('scripts')
    <script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });
    </script>
@endpush