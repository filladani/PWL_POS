<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
           
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 100000, 
                'jumlah' => 5, 

            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 2500000, 
                'jumlah' => 1,

            ],
           
            [
                'detail_id' => 3,
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 60000, 
                'jumlah' => 12,

            ],
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 20000, 
                'jumlah' => 2,

            ],
            
            [
                'detail_id' => 5,
                'penjualan_id' => 3,
                'barang_id' => 5,
                'harga' => 5000, 
                'jumlah' => 10,

            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 9,
                'barang_id' => 6,
                'harga' => 388000,
                'jumlah' => 4,

            ],

            [
                'detail_id' => 7,
                'penjualan_id' => 6,
                'barang_id' => 7,
                'harga' => 5234000,
                'jumlah' => 1,

            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 10,
                'barang_id' => 8,
                'harga' => 325000,
                'jumlah' => 2,

            ],

            [
                'detail_id' => 9,
                'penjualan_id' => 7,
                'barang_id' => 9,
                'harga' => 25000,
                'jumlah' => 5,

            ],
            [
                'detail_id' => 10,
                'penjualan_id' => 2,
                'barang_id' => 10,
                'harga' => 23000,
                'jumlah' => 2,

            ],

            [
                'detail_id' => 11,
                'penjualan_id' => 3,
                'barang_id' => 1,
                'harga' => 275000,
                'jumlah' => 2,

            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 4,
                'barang_id' => 2,
                'harga' => 5850000,
                'jumlah' => 7,

            ],

            [
                'detail_id' => 13,
                'penjualan_id' => 5,
                'barang_id' => 3,
                'harga' => 87000,
                'jumlah' => 8,

            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 6,
                'barang_id' => 4,
                'harga' => 12000,
                'jumlah' => 5,

            ],

            [
                'detail_id' => 15,
                'penjualan_id' => 8,
                'barang_id' => 5,
                'harga' => 47000,
                'jumlah' => 3,

            ],
            [
                'detail_id' => 16,
                'penjualan_id' => 1,
                'barang_id' => 6,
                'harga' => 475000,
                'jumlah' => 1,

            ],

            [
                'detail_id' => 17,
                'penjualan_id' => 9,
                'barang_id' => 7,
                'harga' => 5700000,
                'jumlah' => 4,

            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 2,
                'barang_id' => 8,
                'harga' => 300000,
                'jumlah' => 11,

            ],

            [
                'detail_id' => 19,
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 23000,
                'jumlah' => 15,

            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 7,
                'barang_id' => 10,
                'harga' => 11000,
                'jumlah' => 9,

            ],

            [
                'detail_id' => 21,
                'penjualan_id' => 9,
                'barang_id' => 1,
                'harga' => 234000,
                'jumlah' => 7,

            ],
            [
                'detail_id' => 22,
                'penjualan_id' => 8,
                'barang_id' => 2,
                'harga' => 105000,
                'jumlah' => 2,

            ],

            [
                'detail_id' => 23,
                'penjualan_id' => 8,
                'barang_id' => 3,
                'harga' => 575000,
                'jumlah' => 7,

            ],
            [
                'detail_id' => 24,
                'penjualan_id' => 6,
                'barang_id' => 4,
                'harga' => 20000,
                'jumlah' => 5,

            ],

            [
                'detail_id' => 25,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 67000,
                'jumlah' => 12,

            ],
            [
                'detail_id' => 26,
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 10000,
                'jumlah' => 15,

            ],

            [
                'detail_id' => 27,
                'penjualan_id' => 6,
                'barang_id' => 7,
                'harga' => 290000, // Harga Marvel Comic Book
                'jumlah' => 2,

            ],
            [
                'detail_id' => 28,
                'penjualan_id' => 5,
                'barang_id' => 8,
                'harga' => 227000,
                'jumlah' => 7,

            ],

            [
                'detail_id' => 29,
                'penjualan_id' => 8,
                'barang_id' => 9,
                'harga' => 25000,
                'jumlah' => 4,

            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 47000,
                'jumlah' => 5,

            ],

        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
