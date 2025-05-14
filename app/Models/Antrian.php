<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_kendaraan',
        'merek_kendaraan',
        'jenis_servis',
        'biaya'
    ];
    

    public $timestamps = true; // aktifkan auto created_at & updated_at
}