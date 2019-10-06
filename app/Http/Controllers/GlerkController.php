<?php

namespace App\Http\Controllers;

use App\Glerk;
use Illuminate\Http\Request;

class GlerkController extends Controller
{
    //
    public function store(Request $request) {
        $glerk = [
            'content' => $request->input('content'),
            'owner_id' => auth()->id()
        ];
        return Glerk::create($glerk);
    }
}
