@extends('layouts.app')

@section('content')
<section class="section-main bg-danger outer-container-cards">
        <div class="cards-container">
            <button class="crsl-button left-btn">
                <i class="fa-solid fa-angle-left" onclick="scrollLft()"></i>
            </button>
            <div id="box" class="d-flex">
                @foreach ($gifts as $gift)
                <div class="card col-3 me-3" style="width: 18rem">
                    <div class="img-card-container mb-4">
                        <img src={{$gift->image}} alt="Immagine regalo">
                    </div>
                    <div class="card-body">
                    <h4 class="card-title nome">{{$gift->name}} {{$gift->surname}} </h4>
                    <p class="mb-0"> <span class="fw-bold">GIFT :</span>  {{$gift->gift}}</p>
                    <p><span class="fw-bold">COUNTRY :</span>   {{$gift->country}}</p>
                    
                    <div class="text-center"><a href="{{route('gifts.show', $gift->id)}}" class="btn effect04 bg-danger" data-sm-link-text="OH OH OH" target="_blank"><span class=" fw-bold ">Details</span></a></div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="crsl-button right-btn" onclick="scrollRgt()">
                <i class="fa-solid fa-angle-right"></i>
            </button>
        </div>
</section>   

@endsection

<script>
    function scrollLft() {
        const element = document.getElementById('box');
        element.scrollBy({
            left: -1000,
            behavior: "smooth",
        })
    }
    function scrollRgt() {
      const element = document.getElementById('box');
      element.scrollBy({
        left: 1000,
        behavior: "smooth",
      });
    }
</script>