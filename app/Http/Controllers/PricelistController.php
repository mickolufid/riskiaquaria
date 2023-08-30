<?php

namespace App\Http\Controllers;

use App\Models\Pricelist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PricelistController extends Controller
{
    //
    public function index()
    {
        //get pricelist
        $pricelist = Pricelist::latest()->paginate(5);

        //render view with pricelist
        return view('dashboard.pricelist.index', compact('pricelist'));
    }

    public function create()
    {
        return view('dashboard.pricelist.tambahpricelist');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'productCode' => 'required',
            'productCategory' => 'required',
            'productCommontName' => 'required',
            'productScientificName' => 'required',
            'productIndonesianName' => 'required',
            'productPrice' => 'required',
            'productSize' => 'required',
            'productImage' => 'required',
        ]);

        //upload image
        $image = $request->file('productImage');
        $image->storeAs('public/pricelist', $image->hashName());

        Pricelist::create([
            'productCode' => $request->productCode,
            'productCategory' => $request->productCategory,
            'productCommontName' => $request->productCommontName,
            'productScientificName' => $request->productScientificName,
            'productIndonesianName' => $request->productIndonesianName,
            'productPrice' => $request->productPrice,
            'productSize' => $request->productSize,
            'productImage' => $image->hashName(),
        ]);

        return redirect()->route('pricelist.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        $pricelist = Pricelist::find($id);

        return view('dashboard.pricelist.detailpricelist', compact('pricelist'));
    }

    public function edit(Pricelist $pricelist)
    {
        return view('dashboard.pricelist.updatepricelist', compact('pricelist'));
    }

    public function update(Request $request, Pricelist $pricelist)
    {
        $this->validate($request, [
            'productCode' => 'required',
            'productCategory' => 'required',
            'productCommontName' => 'required',
            'productScientificName' => 'required',
            'productIndonesianName' => 'required',
            'productPrice' => 'required',
            'productSize' => 'required',
        ]);

        if ($request->hasFile('productImage')) {

            //upload new image
            $image = $request->file('productImage');
            $image->storeAs('public/pricelist', $image->hashName());

            //delete old image
            Storage::delete('public/pricelist/' . $pricelist->image);

            //update pricelist with new image
            $pricelist->update([
                'productCode' => $request->productCode,
                'productCategory' => $request->productCategory,
                'productCommontName' => $request->productCommontName,
                'productScientificName' => $request->productScientificName,
                'productIndonesianName' => $request->productIndonesianName,
                'productPrice' => $request->productPrice,
                'productSize' => $request->productSize,
                'productImage' => $image->hashName(),
            ]);
        } else {

            //update pricelist without image
            $pricelist->update([
                'productCode' => $request->productCode,
                'productCategory' => $request->productCategory,
                'productCommontName' => $request->productCommontName,
                'productScientificName' => $request->productScientificName,
                'productIndonesianName' => $request->productIndonesianName,
                'productPrice' => $request->productPrice,
                'productSize' => $request->productSize,
            ]);
        }

        // return redirect to index
        return redirect()->route('pricelist.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Pricelist $pricelist)
    {
        //delete image
        Storage::delete('public/pricelist/'. $pricelist->productImage);

        //delete post
        $pricelist->delete();

        //redirect to index
        return redirect()->route('pricelist.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
