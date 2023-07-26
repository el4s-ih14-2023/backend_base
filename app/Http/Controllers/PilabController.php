<?php

// app/Http/Controllers/PilabController.php

namespace App\Http\Controllers;

use App\Models\Pilab;

class PilabController extends Controller
{
    public function index()
    {
        $pilabData = Pilab::all();
        logger('accessRes', ['body' => $pilabData]);

        return response()->json(['data' => $pilabData], 200);
    }

    public function store()
    {
        $pilabData = Pilab::all();
        logger('accessRes', ['body' => $pilabData]);

        return response()->json(['data' => $pilabData], 200);
    }
}
