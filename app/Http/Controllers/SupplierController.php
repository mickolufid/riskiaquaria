<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function index()
    {
        //get supplier
        $supplier =Supplier::latest()->paginate(5);

        //render view with supplier
        return view('dashboard.supplier.index', compact('supplier'));
    }

}
