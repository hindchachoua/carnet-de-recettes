@extends('layout.nav')
   
    @section('title')
    @section('main')
    <h1 style="font-family: Georgia, serif;">Edit Recette</h1>
    <form action="{{ route('recette.update', $recette->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div>
            <label class="form-label" style="font-family: Georgia, serif; text-decoration: underline">Current Image</label>
            @if($recette->image)
                <img src="{{ asset($recette->image) }}" alt="Current Image" width="200" height="200" style="margin-left: 100px" >
            @else
                <p>No image available</p>
            @endif
        </div>
        <div>
            <label class="form-label" style="font-family: Georgia, serif;">Name</label>
            <input class="form-control" type="text" name="nom_de_plat" placeholder="Name" value="{{ $recette->nom_de_plat }}">
        </div>
        <div>
            <label class="form-label" style="font-family: Georgia, serif;">Contenu</label>
            <input class="form-control" type="text" name="contenu" placeholder="Contenu" value="{{ $recette->contenu }}">
        </div>
        <div>
            <label class="form-label" style="font-family: Georgia, serif;">New Image</label>
            <input class="form-control" type="file" name="image">
        </div>
        <div style="font-family: Georgia, serif; margin-top: 20px">
            <input class="btn btn-primary" type="submit" value="Edit Recette" />
        </div>
    </form>
    @endsection
</body>
</html>
