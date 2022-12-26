@extends('layouts.app')

@section('snow')
<div id="particles-js"></div>
@endsection

@section('content')
<section class="section-main outer-container-cards flex-column">
   
    <div class="bg-black details-container h-50 w-50 d-flex">
        {{-- img --}}
        <div class="col-4 bg-white align-self-center py-5">
            <img src="{{$gift->image}}" alt="Immagine regalo">
        </div>
        {{-- testo --}}
        <div class="col-8 pt-4 single-card-text text-center">
            {{-- dettagli --}}
            <div>
                <p class="text-white">Regalo: {{$gift->gift}}</p>
                <p class="text-white">Nome bambino: {{$gift->name}}</p>
                <p class="text-white">Cognome bambino: {{$gift->surname}}</p>
                <p class="text-white">Et&agrave;: {{$gift->age}}</p>
                <p class="text-white">Paese: {{$gift->country}}</p>
                <p class="text-white">Citt&agrave;: {{$gift->city}}</p>
                <p class="text-white">Indirizzo: {{$gift->address}}</p>
            </div>
            {{-- btns --}}
            <div class="d-flex gap-3 py-3 justify-content-center">
                <a href={{route('gifts.edit', $gift->id)}}>
                    <button class="modify-btn">Modifica</button>
                </a>
                <form action={{route('gifts.destroy', $gift->id)}} method="POST">
                @csrf
                @method('DELETE')
                <button class="noselect delete"><span class='text'>Elimina</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg></span></button>
                </form>
            </div>
            <div class="mt-3">
                <a class="text-uppercase text-white col-12 text-decoration-underline " href="{{route('gifts.index')}}">back to gifts</a>
            </div>
        </div>
    </div>
</section>   



@endsection