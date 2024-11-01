<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guitars= Guitar::all();
        return view("guitars.index", compact("guitars"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("guitars.create");
    }

    /**
     * Store a newly created resource in storage.
     */ //* filled= "title","description","thumb","price","series","release_date","type","genre","artist"

    public function store(Request $request)
    {
        $formData = $request->validate([
            "title"=>"required|max:255|min:3|string|",
            "description"=>"min:15",
            "thumb"=>"url",
            "price"=>"decimal:2,8|required",
            "series"=>"min:5",
            "release_date"=>"date|required",
            "type"=>"string|min:3",
            "genre"=>"string|uppercase|min:3",
            "artist"=>"string|min:5|",
        ],[
            "title.required"=>"Il nome del modello è necessario",
            "description.min"=>"La descrizione necessita di almeno 15 caratteri",
            "thumb.url"=>"Metti un Url valido",
            "price.decimal"=>"Il prezzo va espresso in questo formato es. 3500,00",
            "series.min"=>"Usa almeno 5 caratteri",
            "release_date.min"=>"Usa un formato di data corretto es. 1993-01-01",
            "type.min"=>"Scrivi almeno 3 caratteri",
            "genre.uppercase"=>"Il genere musicale è appartenenza perciò urlalo forte e scrivi in CAPS LOCK!!!",
            "artist.min"=>"Scrivi almeno 5 caratteri, fai il piacere",
            
            
        ]);


        $guitarData = $request->all();
        $guitar = Guitar::create($guitarData);
        return redirect()->route("guitar.show",["id"=>$guitar->id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guitar= Guitar::findOrFail($id);
        return view ("guitars.show", compact("guitar"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guitar = Guitar::findOrFail($id);
        return view("guitars.edit", compact("guitar"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formData = $request->validate([
            "title"=>"required|max:255|min:3|string|",
            "description"=>"required|min:15",
            "thumb"=>"url",
            "price"=>"decimal:2,8|required",
            "series"=>"min:5",
            "release_date"=>"date|required",
            "type"=>"string|min:3",
            "genre"=>"string|uppercase|min:3",
            "artist"=>"string|min:5|",
        ],[
            "title.required"=>"Il nome del modello è necessario",
            "description.min"=>"La descrizione necessita di almeno 15 caratteri",
            "thumb.url"=>"Metti un Url valido",
            "price.decimal"=>"Il prezzo va espresso in questo formato es. 3500,00",
            "series.min"=>"Usa almeno 5 caratteri",
            "release_date.min"=>"Usa un formato di data corretto es. 1993-01-01",
            "type.min"=>"Scrivi almeno 3 caratteri",
            "genre.uppercase"=>"Il genere musicale è appartenenza perciò urlalo forte e scrivi in CAPS LOCK!!!",
            "artist.min"=>"Scrivi almeno 5 caratteri, fai il piacere",
            
            
        ]);

        $guitar = Guitar::findOrFail($id);

        $guitar->update($formData);
        return redirect()->route("guitar.show",["id"=>$guitar->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guitar = Guitar::findOrFail($id);
        $guitar->delete();
        return redirect()->route("guitar.index");
    }
}
