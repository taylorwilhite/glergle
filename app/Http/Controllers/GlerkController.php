<?php

namespace App\Http\Controllers;

use App\Glerk;
use Illuminate\Http\Request;

class GlerkController extends Controller
{
    public function index() {
        $glerks = auth()->user()->glerks;
        return response()->json($glerks);
    }
    //
    public function store(Request $request) {
        $glerk = [
            'content' => $request->input('content'),
            'owner_id' => auth()->id()
        ];
        return Glerk::create($glerk);
    }
}
