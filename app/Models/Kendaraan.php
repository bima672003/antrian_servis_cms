<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $fillable = ['no_polisi', 'jenis', 'merk', 'warna'];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
