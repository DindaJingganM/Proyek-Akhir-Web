<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KpopController extends Controller
{
    public function index()
    {
        return view('kpop');
    }
}
