<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\recette;
use Illuminate\Routing\Route;

class recetteController extends Controller
{
    public function index(){
    
      $recette = recette::all();
      return view('recettes.index', ['recette' => $recette]);  
    }
    public function home(){
    
        $recette = recette::all();
        return view('recettes.home', ['recette' => $recette]);  
      }
    
    public function create(){
      return view('recettes.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName , 'public');
        $data['image'] = '/storage/' . $path;

        recette::create($data);

        return redirect(route('recette.index'));


    }

    public function search(Request $request){
        $search = $request->input('Search');
    
        // Perform a search query based on 'nom_de_plat' and 'contenu'
        $recette = recette::where('nom_de_plat', 'like', '%'.$search.'%')
                          ->orWhere('contenu', 'like', '%'.$search.'%')
                          ->get();
    
        // Pass the search term and search results to the view
        return view('recettes.index', ['recette' => $recette, 'search' => $search]);
    }
    

public function edit(recette $recette){
    return view('recettes.edit', ['recette' => $recette]);
}

public function update(recette $recette, Request $request){
    $data = $request->all();

    // Check if a new image is uploaded
    if ($request->hasFile('image')) {
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $data['image'] = '/storage/' . $path;
    }

    $recette->update($data);
    return redirect(route('recette.index'))->with('success', 'Recette updated successfully');
}


    public function destroy(recette $recette){
        $recette->delete();
        return redirect(route('recette.index'))->with('success', 'product deleted successfully');
    }


    public function show($id)
    {
        $recipe = recette::find($id);

        return view('recettes.show', ['recipe' => $recipe]);
    }

}
