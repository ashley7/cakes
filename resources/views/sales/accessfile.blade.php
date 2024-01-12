@extends('layouts.app')

@section('content')
 <p>Desclimer: This book is subjected to Copy right and you shall not share or make duplicates of it or re-distribute it.</p>
 <iframe src="{{asset('files/'.$sale->file_url)}}#toolbar=0" type="application/pdf" width="100%" height="800px" frameborder="0" allowfullscreen></iframe>                                          
    
 
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
  // Check if the browser supports the 'PDFObject' global variable
  if (typeof PDFObject !== 'undefined') {
    return true;
  }

  // Check if the browser natively supports the 'application/pdf' MIME type
  var isPdfMimeSupported = navigator.mimeTypes && navigator.mimeTypes['application/pdf'];
  if (isPdfMimeSupported) {
    return true;
  }

  // Check if the browser has a built-in PDF viewer plugin
  var isPdfPluginAvailable = false;
  try {
    isPdfPluginAvailable = !!new ActiveXObject('AcroPDF.PDF') || !!new ActiveXObject('PDF.PdfCtrl');
  } catch (e) {}

  return isPdfPluginAvailable;
}
 
if (!isPdfViewerAvailable()) {
    alert('The browser does not have a PDF viewer.');
    window.location.href = "https://manzelahcakes.com/";
} 

</script>
   
 
@endpush