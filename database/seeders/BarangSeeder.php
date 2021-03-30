<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'kode_barang'       => 'PRD001',
            'nama_barang'       => 'Indomie',
            'kategori_barang'   => 'Makanan',
            'harga'             => 3000,
            'qty'               => 100,
        ]);

        Barang::create([
            'kode_barang'       => 'PRD002',
            'nama_barang'       => 'Pocari Sweat',
            'kategori_barang'   => 'Minuman',
            'harga'             => 6000,
            'qty'               => 50,
        ]);

        Barang::create([
            'kode_barang'       => 'PRD003',
            'nama_barang'       => 'Silverqueen',
            'kategori_barang'   => 'Snack',
            'harga'             => 12500,
            'qty'               => 45,
        ]);
    }
}
