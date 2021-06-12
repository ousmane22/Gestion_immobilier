<?php

namespace App\Http\Controllers;

use App\Models\Garniture;
use App\Models\Quartier;
use App\Models\Statu;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $garniture = Garniture::all();
        $quartier =  Quartier::all();
        $status = Statu::all();
        $type = Type::all();
        return view('user', compact('garniture', 'status', 'type', 'quartier'));
    }
}
