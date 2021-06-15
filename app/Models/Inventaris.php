<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    // use HasFactory;

    protected $table ="Inventaris";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','Kode_Barang', 'Nama_Barang','No_Aset','Tgl_Peroleh','Asal_Peroleh','Rupiah_Aset','Tempat_Aset','Merk_Barang','Kondisi'
    ];
}