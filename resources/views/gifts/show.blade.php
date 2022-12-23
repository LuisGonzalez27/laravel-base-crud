@extends('layouts.app')
@section('snow')
<div id="particles-js"></div>
@endsection

@section('content')
<section class="section-main outer-container-cards">
   
    <div class="bg-black h-50 w-50 d-flex">
        {{-- img --}}
        <div class="col-4 bg-white">
            <img src="" alt="">
        </div>
        {{-- testo --}}
        <div class="col-8 single-card-text">
            {{-- dettagli --}}
            <div class="flex-grow-1">
                <p class="text-white">testo</p>
                <p class="text-white">testo</p>
                <p class="text-white">testo</p>
            </div>
            {{-- btns --}}
            <div class=" d-flex gap-2 pb-3">
                <a href={{route('gifts.edit', $gift->id)}}>
                <button>modifica</button>
                </a>
                <form action={{route('gifts.destroy', $gift->id)}} method="POST">
                @csrf
                @method('DELETE')
                <button class="noselect delete"><span class='text'>Delete</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg></span></button>
                </form>
            </div>
        </div>
    </div>

</section>   
@endsection