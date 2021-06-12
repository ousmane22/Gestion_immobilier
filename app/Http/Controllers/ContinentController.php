<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\Continent;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liste()
    {
        $continent = Continent::get();
        return view('continent.list', compact('continent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|regex:/^[\pL\s\-]+$/u|unique:continents,nom',
            'superficie' => 'required|numeric'
        ]);
        $continent  = new Continent;
        $continent->nom = request('nom');
        $continent->superficie = request('superficie');
        $continent->save();
        Flashy::message('Continent ajouté', 'http://127.0.0.1:8000/continent/list');
        return redirect()->route('continent.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
