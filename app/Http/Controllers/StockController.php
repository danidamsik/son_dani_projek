<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StockModel as StockModel;

class StockController extends Controller
{
    public function view(){
        $stock = StockModel::get();
        return view('tampilan.stock', ['stock' => $stock]);
    }
    public function tambah_data(Request $request){
        $nama_barang = $request->namabarang;
        $harga_jual = $request->hargajual;
        $harga_beli = $request->hargabeli;

        $k = new StockModel();
        $k->nama_barang = $nama_barang;
        $k->harga_beli = $harga_beli;
        $k->harga_jual = $harga_jual;
        $k->save();
        return redirect()->route('create-stock-get');
    }

    public function deleteStock($stock_id)
    {
        $stock = StockModel::find($stock_id);
        $stock->delete();

        return redirect()->route('create-stock-get');
    }
    public function updateStock(){
        return view('tampilan.upadte');
    }
}
