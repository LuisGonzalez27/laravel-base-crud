@extends('layouts.app')

@section('content')
<section class="section-main bg-danger outer-container-cards">

        <div class="cards-container">
            @foreach ($gifts as $gift)
                <div class="card col-3  me-3" style="width: 18rem;">
                    <img src={{$gift->image}} class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$gift->name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href={{route('gifts.show', $gift->id)}} class="btn btn-primary">Apri regalo</a>
                    </div>
                </div>
            @endforeach
        </div>

</section>   

@endsection