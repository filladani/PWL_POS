<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Filla',
                'penjualan_kode' => 'FR01',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Dani',
                'penjualan_kode' => 'FR02',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Felix',
                'penjualan_kode' => 'FR03',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Risma',
                'penjualan_kode' => 'FR04',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Putri',
                'penjualan_kode' => 'FR05',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Annisa',
                'penjualan_kode' => 'FR06',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Azzizah',
                'penjualan_kode' => 'FR07',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Danu',
                'penjualan_kode' => 'FR08',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Reza',
                'penjualan_kode' => 'FR09',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Hannan',
                'penjualan_kode' => 'FR10',
                'penjualan_tanggal' => now(),

            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
