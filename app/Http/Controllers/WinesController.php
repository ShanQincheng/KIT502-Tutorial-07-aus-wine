<?php

namespace App\Http\Controllers;

use App\Models\Wines;
use Illuminate\Http\Request;

class WinesController extends Controller
{

    public function index()
    {
        $wines = Wines::all();

        //dd($wines);
        return view('wines.index', [
            'wines'=>$wines,
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $wine = Wines::make([
           'ID' => $request->input('name-add-new-wine'),
           'Name' => $request->input('name-add-new-wine'),
           'Type' => $request->input('type-add-new-wine'),
           'Quantity' => $request->input('qty-add-new-wine'),
           'Price' => $request->input('price-add-new-wine'),
           'Region' => $request->input('region-add-new-wine'),
        ]);
        $wine->save();

        return redirect('/wines');
    }

    public function show(Wines $wines)
    {
        //
    }

    public function edit(Wines $wines)
    {
        //
    }

    public function update(Request $request, Wines $wines)
    {
        //
    }

    public function destroy(Wines $wines)
    {
        //
    }
}