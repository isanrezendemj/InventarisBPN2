<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna_bidang extends Model
{
    // use HasFactory;
    
    protected $table ="pengguna_bidang";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','Kode_Bidang', 'Nama_Bidang','No_Aset','Nama_Barang','Kondisi','Image'
    ];
}