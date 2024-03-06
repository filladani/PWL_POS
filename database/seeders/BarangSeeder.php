<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 2,
                'barang_kode' => 'FSHN001',
                'barang_nama' => 'Baju Casual',
                'harga_beli' => 150000,
                'harga_jual' => 250000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'ELEK002',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 2500000,
                'harga_jual' => 3500000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'OTMTF003',
                'barang_nama' => 'Oli Mesin',
                'harga_beli' => 30000,
                'harga_jual' => 50.000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'barang_kode' => 'MKNN004',
                'barang_nama' => 'Snack Keripik',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'barang_kode' => 'PRWTKN005',
                'barang_nama' => 'Masker Wajah',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'FSHN006',
                'barang_nama' => 'Sepatu Sport',
                'harga_beli' => 200000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 1,
                'barang_kode' => 'ELEK007',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 7000000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'OTMTF008',
                'barang_nama' => 'Lampu Mobil',
                'harga_beli' => 50000,
                'harga_jual' => 80000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'MKNN009',
                'barang_nama' => 'Cokelat',
                'harga_beli' => 8000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'PRWTKN010',
                'barang_nama' => 'Shampoo',
                'harga_beli' => 15000,
                'harga_jual' => 25000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
