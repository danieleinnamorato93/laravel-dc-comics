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
            "description"=>"required|min:15",
            "thumb"=>"url:http,https",
            "price"=>"decimal:2,8|required",
            "series"=>"min:5",
            "release_date"=>"date|required",
            "type"=>"string|min:3",
            "genre"=>"string|uppercase|min:3",
            "artist"=>"string|min:5|",
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
        $formData = $request->all();
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
