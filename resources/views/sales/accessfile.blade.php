@extends('layouts.app')

@section('content')
<div class="container">
  <p>Desclimer: This book is subjected to Copy right and you shall not share or make duplicates of it or re-distribute it.</p>
  <iframe src="{{asset('files/'.$sale->file_url)}}#toolbar=0&scrollbar=1" type="application/pdf" width="100%" height="450px"></iframe> 
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
  var mimeType = "application/pdf";

  // Check if the browser has a PDF viewer using the navigator.mimeTypes array
  if (navigator.mimeTypes && navigator.mimeTypes.length > 0) {
    for (var i = 0; i < navigator.mimeTypes.length; i++) {
      if (navigator.mimeTypes[i].type === mimeType) {
        return true;
      }
    }
  }

  // Check if the browser supports the PDF MIME type using the ActiveXObject (for IE)
  try {
    new ActiveXObject('AcroPDF.PDF');
    return true;
  } catch (e) {
    try {
      new ActiveXObject('PDF.PdfCtrl');
      return true;
    } catch (e) {
      return false;
    }
  }

  return false;
} 
  
if (!isPdfViewerAvailable()) {
    alert('The browser does not have a PDF viewer.');
    window.location.href = "https://manzelahcakes.com/";
}

</script>
   
 
@endpush