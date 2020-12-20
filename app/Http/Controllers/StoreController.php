<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class StoreController extends Controller
{

    public function index()
    {
        $barangs = Barang::paginate(20);
        return view('store', compact('barangs'));
    }
}
