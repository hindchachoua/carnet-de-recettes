<!-- resources/views/recettes/show.blade.php -->

@extends('layout.nav')

@section('main')
    <div class="container mt-5 mb-5">
        <h1 class="text-center mb-5">{{ $recipe->nom_de_plat }}</h1>

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                        <img src="{{ asset($recipe->image) }}" width="100%" height="100%" alt="image" class="img img-responsive">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{ $recipe->nom_de_plat }}</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom border-danger border-3">
                        <h4>{{ $recipe->nom_de_plat }}</h4>
                        <p>{{ $recipe->contenu }}</p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">Delicious</p>
                            <a href="/home" class="btn border border-secondary rounded-pill px-3 text-primary">
                                <i class="fa fa-arrow-left me-2 text-primary"></i>Back to All Recipes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
