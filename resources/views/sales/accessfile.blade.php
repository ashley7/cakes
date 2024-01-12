@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="card">               
        <div class="card-body">     
            <embed src="{{asset('files/'.$sale->file_url)}}#toolbar=0" type="application/pdf" width="100%" height="1000px" frameborder="0" allowfullscreen sandbox="allow-same-origin allow-scripts"></embed>                                          
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