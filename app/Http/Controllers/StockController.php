<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    //
    public function index()
    {
        //get stock
        $stock =Stock::latest()->paginate(5);

        //render view with stock
        return view('dashboard.stock.index', compact('stock'));
    }

}
