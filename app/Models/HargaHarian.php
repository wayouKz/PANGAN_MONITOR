<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HargaHarian extends Model
{
    protected $table = 'harga_harian';

    protected $fillable = [
        'varian_id',
        'tanggal',
        'harga'
    ];
}
