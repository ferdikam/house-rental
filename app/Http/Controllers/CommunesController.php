<?php

namespace App\Http\Controllers;

use App\Commune;
use Illuminate\Http\Request;

class CommunesController extends Controller
{
    public function index()
    {
        $communes = Commune::orderBy('name')->get();

        return response($communes,200);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required'
        ]);

        $commune = Commune::create($attributes);

        // return Response::json($commune,200);
        return response()
            ->json([
                'saved' => true,
                'data' => $commune,
                'message' => 'Vous avez réussi à créer une commune!'
            ]);
    }
}
