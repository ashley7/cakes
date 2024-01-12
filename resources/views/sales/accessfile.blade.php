@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="card">               
        <div class="card-body"> 
           
            <p>Desclimer: This book is subjected to Copy right and you shall not share or make duplicates of it or re-distribute it.</p>

               
            <embed src="{{asset('files/'.$sale->file_url)}}#toolbar=0" type="application/pdf" width="100%" height="1000px" frameborder="0" allowfullscreen sandbox="allow-same-origin allow-scripts"></embed>                                          
        </div>
    </div>
</div>
 
@endsection


@section('styles')

<style>
      @media print {
         html,
         body,
         embed {
            display: none;
         }
      }

      html {
         user-select: none;
      }
   </style>

@endsection

@push('scripts')
    <script> 
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });        
    </script>

<script>
    document.addEventListener('keydown', function(event) {
      if (event.keyCode === 44 || event.key === 'PrintScreen') {
        event.preventDefault();
        alert('Screenshots are not allowed on this page.');
      }
    });
  </script>

<script>
    document.addEventListener('contextmenu', function(event) {
      var isPdfElement = event.target.nodeName === 'EMBED' && event.target.type === 'application/pdf';

      if (isPdfElement) {
        event.preventDefault();
        // alert('Right-click is disabled on this PDF.');
      }
    });
  </script>
@endpush