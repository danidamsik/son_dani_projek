<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockModel extends Model
{
    protected $table = "stock";
    protected $primaryKey = "stock_id";
    
    protected $fillable = [
        'nama_barang', 'harga_beli', 'harga_jual', 'created_at','updated_at'
    ];
}
