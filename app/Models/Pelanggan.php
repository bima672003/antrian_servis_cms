<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = ['nama', 'no_hp', 'alamat'];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
