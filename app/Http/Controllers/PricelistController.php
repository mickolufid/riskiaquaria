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

    public function create()
    {
        return view('dashboard.pricelist.tambahpricelist');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'productCode' => 'required',
            'productCategory' => 'required',
            'productCommontName' => 'required',
            'productScientificName' => 'required',
            'productIndonesianName' => 'required',
            'productPrice' => 'required',
            'ProductSize' => 'required',
            // 'productImage' => 'required',
        ]);

        //upload image
        // $image = $request->file('productImage');
        // $image->storeAs('public/pricelist', $image->hashName());

        Pricelist::create([
            'productCode' => $request->productCode,
            'productCategory' => $request->productCategory,
            'productCommontName' => $request->productCommontName,
            'productScientificName' => $request->productScientificName,
            'productIndonesianName' => $request->productIndonesianName,
            'productPrice' => $request->productPrice,
            'ProductSize' => $request->ProductSize,
            // 'productImage' => $request->hasName(),
        ]);

        return redirect()->route('pricelist.index')->with('success', 'Data berhasil ditambahkan');


    }

    public function show($id)
    {
        $pricelist = Pricelist::find($id);

        return view('dashboard.pricelist.detailpricelist', compact('pricelist'));
    }


}
