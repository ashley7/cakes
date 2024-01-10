@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="card">               
        <div class="card-body"> 
            
             <iframe src="{{$sale->file_url}}" width="100%" height="1000px"></iframe>

                                    
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