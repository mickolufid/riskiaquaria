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

    public function create()
    {
        return view('dashboard.supplier.tambahsupplier');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'clientName' => 'required',
            'clientContact' => 'required',
            'clientEmail' => 'required',
            'clientAddress' => 'required',
        ]);

        Supplier::create([
            'clientName' => $request->clientName,
            'clientContact' => $request->clientContact,
            'clientEmail' => $request->clientEmail,
            'clientAddress' => $request->clientAddress,
        ]);

        return redirect()->route('supplier.index')->with('success', 'Data berhasil ditambahkan');
    }

}
