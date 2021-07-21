<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;

class GenerateController extends Controller
{
    public function price_generate()
    {
        $tags = [];
        return view('price_tag', ['tags' => $tags]);
    }
}
