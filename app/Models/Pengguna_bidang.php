<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna_bidang extends Model
{
    // use HasFactory;
    
    protected $table ="pengguna_bidang";
    protected $primaryKey = 'Kode_Bidang';
    protected $fillable = [
        'Kode_Bidang', 'Nama_Bidang','Kode_Barang','Nama_Barang','Kategori','Kondisi','Image'
    ];
}