<?php

namespace Database\Seeders;

use App\Models\produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['nama'=> 'bolu peca',
            'deskripsi'=> 'kue bolu',
            'harga'=>10_000,
            'stok'=>20,
            ],
            ['nama'=> 'bolu sei',
            'deskripsi'=> 'kue bolu',
            'harga'=>20_000,
            'stok'=>10,
            ],

        ];

        foreach($data as $item){
            produk::create($item);
        }
    }
}