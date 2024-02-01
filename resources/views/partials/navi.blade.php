

  
  <nav class="navbar navbar-expand-lg  p-3" style=" background-color: #f5f5f5">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home" style="font-size: 60px"><img src="{{ asset('storage/images/logo.png') }}" alt="" width="100" height="100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="recette/create">add recipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="/recette">manage recipe</a>
          </li>
        </ul>
        
        <form class="d-flex" method="get" action="/search">
          <input class="form-control me-2" type="search" placeholder="Search" name="Search" value="{{ isset($search) ? $search : ''}}">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
    </nav>

{{-- @once
    <script>
        alert ("hello")
    </script>
@endonce --}}