@extends('layouts.app')

@section('content')
<div class="container"> 
 

    <h2>{{ $title }}</h2>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Send new File
    </button>
    <hr>

    <div class="card">        
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th> <th>Date sent</th> <th>Name</th> <th>Email</th> <th>Time recieved</th> <th></th>
                    </thead>

                    <tbody>
                        @foreach($sales as $sale)
                        <tr>
                            <td>{{$sale->id}}</td>
                            <td>{{$sale->created_at}}</td>
                            <td>{{$sale->name}}</td>
                            <td>{{$sale->email}}</td>
                            <td>{{$sale->time_accessed}}</td>
                            <td>
                                <form action="{{ route('sales.destroy',$sale->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$sales->links()}}
            </div>           
        </div>
    </div>       
</div>

 
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Send FIle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{url('sales')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">

        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">

        <!-- <label for="file_url">Attach file</label> <br>
        <input type="file" name="file_url"> -->

        <hr>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
     
      </div>
    
    </div>
  </div>
</div>
@endsection

