<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;

class TipeMobilController extends Controller
{
    function index(){
        $tipeMobilData = TipeMobil::get();
        return view('pages.tipe_mobil.index', compact('tipeMobilData'));
    }
    function create()
    {
            return view('pages.tipe_mobil.create');
    }

    function store(Request $request)
    {
        $tipeMobilData = $request->validate([
            'tipe' => 'required'
        ]);

        TipeMobil::create($tipeMobilData);

        return redirect()->to('/tipemobil');
    }

    function edit($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        return view('pages.tipe_mobil.edit', compact('tipeMobilData'));
    }

    function update($id, Request $request)
    {
        $validasiTipeMobil = $request -> validate([
            'tipe' => 'required'
        ]);

        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData -> update($validasiTipeMobil);

        return redirect()->to('/tipemobil');
    }
    function delete($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData -> delete();
        return redirect()->to('/tipemobil');
    }
}
