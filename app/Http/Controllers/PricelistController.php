<?php

namespace App\Http\Controllers;

use App\Models\Pricelist;
use Illuminate\Http\Request;

class PricelistController extends Controller
{
    //
    public function index()
    {
        //get pricelist
        $pricelist =Pricelist::latest()->paginate(5);

        //render view with pricelist
        return view('dashboard.pricelist.index', compact('pricelist'));
    }
}
