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

    public function store(Request $request)
    {
        $exist = Wines::find($request->input('name-add-new-wine'));
        if ($exist !== null) {
            return back()->with('error', $request->input('name-add-new-wine').' already exist!');
        }

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

    public function delete($toDelWineID) {
        $toDelWine = Wines::where('ID', $toDelWineID);
        $toDelWine->delete();

        return json_encode("delete success");
    }

    public function edit(Request $request)
    {
        $wine = Wines::find($request->input('name-edit-wine'));
        $wine->Type = $request->input('type-edit-wine');
        $wine->Quantity = $request->input('qty-edit-wine');
        $wine->Price = $request->input('price-edit-wine');
        $wine->Region = $request->input('region-edit-wine');

        $wine->save();

        return redirect('/wines');
    }
}