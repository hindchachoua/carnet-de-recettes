@extends('layout.nav')

@section('title')
    recette
@endsection

@section('main')

<h1 class="text-center mb-5 mt-5">recettes</h1>

<div>
    @if(session()->has('success'))
    <div>
        {{ session('success') }}
    </div>
    @endif
</div>

<div class="max-w-screen-2xl mx-auto">
    <form class="mb-4" method="get" action="{{ route('recette.index') }}">
        <div class="flex items-center">
            <input class="form-control me-2" type="search" placeholder="Search" name="Search" value="{{ isset($search) ? $search : ''}}">
        </div>
    </form>

    @if(isset($search))
        <p class="mb-4">Search results for: "{{ $search }}"</p>
    @endif

    <table class="w-100 bg-white dark:bg-gray-800 shadow rounded overflow-hidden divide-y divide-gray-200">
        <tr>
            <th class="px-6 py-3 bg-gray-50 ">ID</th>
            <th class="px-6 py-3 bg-gray-50 ">Nom de plat</th>
            <th class="px-6 py-3 bg-gray-50 ">Contenu</th>
            <th class="px-6 py-3 bg-gray-50 ">Image</th>
            <th class="px-6 py-3 bg-gray-50">Edit</th>
            <th class="px-6 py-3 bg-gray-50">Delete</th>
        </tr>
        @foreach ($recette as $rec)
            <tr>
                <td class="px-6 py-4 ">{{ $rec->id }}</td>
                <td class="px-6 py-4 ">{{ $rec->nom_de_plat }}</td>
                <td class="px-6 py-4 ">{{ $rec->contenu }}</td>
                <td class="px-6 py-4 "><img src="{{ asset($rec->image) }}" width="50" height="50" alt="image" class="img img-responsive"></td>
                <td class="px-6 py-4 ">
                    <a href="{{ route('recette.edit', $rec->id) }}" class="btn btn-success">Edit</a>
                </td>
                <td class="px-6 py-4 ">
                    <form action="{{ route('recette.destroy', $rec->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
