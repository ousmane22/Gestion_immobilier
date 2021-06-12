<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Pays;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liste()
    {
        $continent = Continent::get();
        $pays = Pays::all();
        return view('pays.list', compact('pays', 'continent'));
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
            'nom' => 'required|regex:/^[\pL\s\-]+$/u|unique:regions,nom',
            'superficie' => 'required|numeric'
        ]);
        $pays  = new Pays;
        $pays->nom = request('nom');
        $pays->superficie = request('superficie');
        $pays->continent_id = request('continent_id');
        $pays->save();
        Flashy::message('Pays ajouté', 'http://127.0.0.1:8000/pays/list');
        return redirect()->route('pays.list');
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
