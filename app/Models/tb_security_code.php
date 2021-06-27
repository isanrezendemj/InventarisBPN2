<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_security_code extends Model
{
    // use HasFactory;

    protected $table ="tb_security_code";
    protected $primaryKey = 'id_security';
    protected $fillable = [
        'id_security', 'nama','code'
    ];
}