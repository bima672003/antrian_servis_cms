<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PekerjaanServis extends Model
{
    public function antrian()
{
    return $this->hasOne(Antrian::class);
}

}
