<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna_pegawai extends Model
{
    // use HasFactory;

    protected $table ="pengguna_pegawai";
    protected $primaryKey = 'NRP_NIK';
    protected $fillable = [
        'NRP_NIK', 'Nama_Pegawai_PPNPN','Bidang','Status','Kode_Barang','Nama_Barang','Kategori','Image'
    ];
}