@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Your can now access the file') }}</div>

                <div class="card-body">

                                    
                        <a href="/your_file/{{$hex_email}}" class="btn btn-primary">Go to File</a>                    

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection