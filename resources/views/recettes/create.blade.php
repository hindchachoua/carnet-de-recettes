@extends('layout.nav')
    
    @section('main')
    <h1 style="font-family: Georgia, serif;">Create recette</h1>
    <form action="{{route('recette.store')}}" method="post"  enctype="multipart/form-data" style="margin-top: 20px; margin-left: 40px">
        @csrf
        @method('POST')
        <div>
            <label class="form-label " style="font-family: Georgia, serif;">Name</label>
            <input type="text" name="nom_de_plat" placeholder="name" class="form-control" style="width: 400px">
        </div>
        <div>
            <label class="form-label" style="font-family: Georgia, serif;">Contenu</label>
            <input type="text" name="contenu" placeholder="contenu" class="form-control" style="width: 400px">
        </div>
        <div>
            <label class="form-label" style="font-family: Georgia, serif;">Image</label>
            <input type="file" name="image" class="form-control" style="width: 400px">
        </div>
        <div style="margin-top: 20px;">
            <input type="submit" value="save recette" class="btn btn-primary" />
        </div>

    </form>
    
    @endsection
</body>
</html>