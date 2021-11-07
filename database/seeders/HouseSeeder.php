<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('house')->insert([
            'house_id' => 'A1',
            'luas_tanah' => '884',
            'luas_bangunan' => '600',
            'kamar_tidur' => '5',
            'kamar_mandi' => '5',
            'harga' => '150000000',
            'gambar' => 'fotorumah/rumah1.jpg'
        ]);
        DB::table('house')->insert([
            'house_id' => 'A2',
            'luas_tanah' => '300',
            'luas_bangunan' => '400',
            'kamar_tidur' => '3',
            'kamar_mandi' => '2',
            'harga' => '100000000',
            'gambar' => 'fotorumah/rumah2.jpg'
        ]);
        DB::table('house')->insert([
            'house_id' => 'B1',
            'luas_tanah' => '142',
            'luas_bangunan' => '200',
            'kamar_tidur' => '2',
            'kamar_mandi' => '1',
            'harga' => '50000000',
            'gambar' => 'fotorumah/rumah3.jpg'
        ]);
        DB::table('house')->insert([
            'house_id' => 'C5',
            'luas_tanah' => '102',
            'luas_bangunan' => '90',
            'kamar_tidur' => '2',
            'kamar_mandi' => '2',
            'harga' => '35000000',
            'gambar' => 'fotorumah/rumah4.jpg'
        ]);
        DB::table('house')->insert([
            'house_id' => 'F3',
            'luas_tanah' => '114',
            'luas_bangunan' => '71',
            'kamar_tidur' => '3',
            'kamar_mandi' => '2',
            'harga' => '40000000',
            'gambar' => 'fotorumah/rumah5.jpg'
        ]);
    }
}
