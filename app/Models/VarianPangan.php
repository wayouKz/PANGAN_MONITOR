<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VarianPangan extends Model
{
    protected $table = 'varian_pangan';
    protected $fillable = ['komoditas_id','nama_varian','kuantitas','satuan'];
}
