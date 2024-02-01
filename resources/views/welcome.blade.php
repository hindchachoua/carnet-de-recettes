@extends('layout.nav')

@section('main')

<h1>Welcome</h1>

@foreach ($recette as $recette)
<div class="col-md-6 col-lg-4 col-xl-3r">
    <div class="rounded position-relative fruite-item">
        <div class="fruite-img">
            <img src="{{ asset($recette->image) }}" width="100%" height="100%" alt="image" class="img img-responsive">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{ $recette->nom_de_plat }}</div>
        <div class="p-4 border border-secondary border-top-0 rounded-bottom border-danger border-3">
            <h4>Grapes</h4>
            <p>{{ $recette->contenu }}</p>
            <div class="d-flex justify-content-between flex-lg-wrap">
                <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
            </div>
        </div>
    </div>
</div>
@endforeach

@endSection
