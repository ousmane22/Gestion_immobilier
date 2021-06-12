<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\Region;
use App\Models\Departement;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class RegionController extends Controller
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
        $pays = Pays::get();
        $region = Region::all();
        return view('region.list', compact('pays', 'region'));
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
            'superficie' => 'required|numeric',

        ]);
        $region  = new Region;
        $region->nom = request('nom');
        $region->superficie = request('superficie');
        $region->pays_id = request('pays_id');
        $region->save();
        Flashy::message('Région ajouté');
        return redirect()->route('region.list');
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
