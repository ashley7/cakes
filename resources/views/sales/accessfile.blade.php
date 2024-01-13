@extends('layouts.app')

@section('content')
<div class="container">
  <p>Desclimer: This book is subjected to Copy right and you shall not share or make duplicates of it or re-distribute it.</p>

    <img src="{{asset('book/1.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/2.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/3.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/4.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/5.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/6.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/7.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/8.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/9.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/10.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/11.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/12.PNG')}}" width="100%" alt="">

    <img src="{{asset('book/13.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/14.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/15.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/16.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/17.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/18.PNG')}}" width="100%" alt="">

    <img src="{{asset('book/19.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/20.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/21.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/22.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/23.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/24.PNG')}}" width="100%" alt="">

    <img src="{{asset('book/25.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/26.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/27.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/28.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/29.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/30.PNG')}}" width="100%" alt="">

    <img src="{{asset('book/31.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/32.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/33.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/34.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/35.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/36.PNG')}}" width="100%" alt="">

    <img src="{{asset('book/37.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/38.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/39.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/40.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/41.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/42.PNG')}}" width="100%" alt="">

    <img src="{{asset('book/43.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/44.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/45.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/46.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/47.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/48.PNG')}}" width="100%" alt="">

    <img src="{{asset('book/49.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/50.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/50.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/51.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/52.PNG')}}" width="100%" alt="">
    <img src="{{asset('book/53.PNG')}}" width="100%" alt=""> 
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
    document.addEventListener('contextmenu', function(event) {
      event.preventDefault();
      alert("Right-click is disabled");
    });
  </script>

<script>
    document.addEventListener('keyup', function(event) {
      event.preventDefault();
      navigator.clipboard.writeText('');
      alert("Screen is disabled");
    });
  </script>
 
@endpush