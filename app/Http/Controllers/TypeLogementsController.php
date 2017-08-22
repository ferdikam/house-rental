<?php

namespace App\Http\Controllers;

use App\TypeLogement;
use Illuminate\Http\Request;

class TypeLogementsController extends Controller
{
    public function index()
    {
        $typeLogements = TypeLogement::orderBy('name')->get();

        return response($typeLogements, 200);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required'
        ]);

        $typeLogement = TypeLogement::create($attributes);

        return response()
            ->json([
                'saved' => true,
                'data' => $typeLogement,
                'message' => 'Vous avez réussi à créer un type de logement!'
            ]);
    }
}
