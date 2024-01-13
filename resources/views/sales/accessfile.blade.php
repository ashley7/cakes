@extends('layouts.app')

@section('content')
<div class="container">
  <p>Desclimer: This book is subjected to Copy right and you shall not share or make duplicates of it or re-distribute it.</p>
  <iframe src="{{asset('files/'.$sale->file_url)}}#toolbar=0&scrollbar=0" type="application/pdf" width="100%" height="450px"></iframe> 
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
  function isPdfViewerAvailable() {
  if (
    typeof PDFObject !== 'undefined' ||
    (navigator.mimeTypes && navigator.mimeTypes['application/pdf']) ||
    (!!new ActiveXObject('AcroPDF.PDF') || !!new ActiveXObject('PDF.PdfCtrl') ) )
       return true;

       return false;
  }
  
 
 
if (!isPdfViewerAvailable()) {
    alert('The browser does not have a PDF viewer.');
    window.location.href = "https://manzelahcakes.com/";
} 



</script>
   
 
@endpush