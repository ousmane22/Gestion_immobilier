<?php

namespace App\Http\Controllers;

use App\Models\Bienimage;
use App\Models\Biens;
use App\Models\Image;
use Illuminate\Http\Request;

class BiensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'MontantCaution' => 'required|numeric',
            'loyerMensuel' => 'required|numeric',
            'adresse' => 'required',
            'garniture_id' => 'required',
            'user_id' => 'required',
            'quartier_id' => 'required',
            'type_id' => 'required',


        ]);

        $bien = new Biens();
        $bien->MontantCaution = $request->MontantCaution;
        $bien->loyerMensuel = $request->loyerMensuel;
        $bien->adresse = $request->adresse;
        $bien->garniture_id = $request->garniture_id;
        $bien->user_id = auth()->user()->id;
        $bien->quartier_id = $request->quartier_id;
        $bien->type_id = $request->type_id;
        $data = $request->validate([
            'fileName' => 'required|mimes:jpeg,png,jpg',

        ]);
        if ($request->hasFile('fileName')) {
            $imageNameArr = [];
            foreach ($request->fileName as $file) {
                // you can also use the original name
                $fileName = time() . '-' . $file->getClientOriginalName();
                $onlyName =  $name = explode('.', $fileName)[0];
                $imageNameArr[] = $fileName;
                // Upload file to public path in images directory
                $file->move(public_path('images'), $fileName);
                // Database operation
                $image =  new Image();
                $image->file = $fileName;
                $image->fileName = $onlyName;

                $image->save();
                $idImage[] = $image->id;
            }



            $longueur = count($idImage);
            for ($i = 0; $i < $longueur; $i++) {
                $bien_image = new Bienimage();
                $bien_image->bien_id = $request->bien_id;
                $bien_image->referentiel_id = $idImage[$i];
                $bien_image->save();
            }
        }
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
