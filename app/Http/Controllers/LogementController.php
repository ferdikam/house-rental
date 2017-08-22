<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Logement;
use App\TypeLogement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class LogementController extends Controller
{
    public function index()
    {
    	$logements = Logement::latest()->get();
	    $communes = Commune::orderBy('name')->get();
	    $typeLogements = TypeLogement::orderBy('name')->get();

    	return view('logement.index', compact('logements', 'communes', 'typeLogements'));
    }

    public function create()
    {
    	$communes = Commune::orderBy('name')->get();
    	$typeLogements = TypeLogement::orderBy('name')->get();

    	return view('logement.create', compact('communes', 'typeLogements'));
    }

    public function store()
    {

    }
}
