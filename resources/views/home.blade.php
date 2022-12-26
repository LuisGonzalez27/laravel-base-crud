@extends('layouts.app')

@section('snow')
<div id="particles-js"></div>
@endsection

@section('countdown')
<div class="countdown-xmass text-center">
  <h1 class="text-uppercase text-white fw-bold ctndwn">time to x-mass:</h1>
  <div id="timer" ></div> 
  <div class=" mt-5 text-white">
    <a href="{{route('gifts.index')}}" class="btn effect04" data-sm-link-text="CLICK" target="_blank"><span class=" fw-bold">GO TO GIFTS</span></a>
  </div>
</div>

@endsection


<script>
    function updateTimer() {
    future  = Date.parse("December 25, 2022 00:00:01");
    now     = new Date();
    diff    = future - now;
  
    days  = Math.floor( diff / (1000*60*60*24) );
    hours = Math.floor( diff / (1000*60*60) );
    mins  = Math.floor( diff / (1000*60) );
    secs  = Math.floor( diff / 1000 );
  
    d = days;
    h = hours - days  * 24;
    m = mins  - hours * 60;
    s = secs  - mins  * 60;
  
    document.getElementById("timer")
      .innerHTML =
        '<div>' + d + '<span>days</span></div>' +
        '<div>' + h + '<span>hours</span></div>' +
        '<div>' + m + '<span>minutes</span></div>' +
        '<div>' + s + '<span>seconds</span></div>' ;
  }
  setInterval('updateTimer()', 1000 );
</script>