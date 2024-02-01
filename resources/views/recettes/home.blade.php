@extends('layout.nav')

@section('main')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div style="background-image: url('{{ asset('storage/images/female-chef-1.avif') }}'); height: 600px; width: 100%; background-size: cover; background-position: center; position: relative;">
                <h1 class=" display-3" style="color: #f5f5f5; text-align: center; padding-top: 200px; font-size: 80px; background-color: rgba(0, 0, 0, 0.5); margin-top: 100px; font-family: Georgia, serif;">Welcome To Our Site</h1>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <h1 class="text-center" style="margin-top: 200px; font-family: Georgia, serif; font-size: 90px">Eat To Be Happy!! <img src="{{ asset('storage/images/logo.png') }}" alt="" width="200" height="200"></h1>
            </div>
        </div>
    </div>
</div>



<div style="background-color: #d3bfb3">
<div class="container mt-5 mb-5" style="background-color: #f5f5f5">

    <h1 class="text-center mb-5 " style="font-family: Georgia, serif; height: 100px">All Recipes</h1>
    

    <div class="row">
        @foreach ($recette as $rec)
            <div class="col-md-4 mb-4">
                <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                        <img src="{{ asset($rec->image) }}" width="100%" height="100%" alt="image" class="img img-responsive">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px; font-family: Georgia, serif;">{{ $rec->nom_de_plat }}</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom border-danger border-3">
                        <h4 style="font-family: Georgia, serif;">{{ $rec->nom_de_plat }}</h4>
                        <p style="font-family: Georgia, serif;">{{ $rec->contenu }}</p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0" style="font-family: Georgia, serif;">Delicious</p>
                            <a href="{{ route('recipe.show', $rec->id) }}"  style="font-family: Georgia, serif;" class="btn border border-secondary rounded-pill px-3 text-primary">
                                <i class="fa fa-arrow-right me-2 text-primary"></i>More
                            </a>                       
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>

@endsection
