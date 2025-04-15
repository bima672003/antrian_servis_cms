<?php
namespace App\Models;

class Pegawai
{
    public static function all()
    {
        return [
            ['id' => 1, 'nama' => 'Rina', 'jabatan' => 'Kasir', 'transaksi_id' => 1001],
            ['id' => 2, 'nama' => 'Tono', 'jabatan' => 'Mekanik', 'transaksi_id' => 1002],
        ];
    }

    public static function find($id)
    {
        $data = collect(self::all());
        return $data->firstWhere('id', $id);
    }
}
