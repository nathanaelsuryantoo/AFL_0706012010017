<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LesseeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lessee')->insert([
            'nik' => '3203012503770011',
            'nama' => 'Guohiji Chen',
            'jenis_kelamin' => 'Pria',
            'umur' => '44',
            'rented_house' => 'B1',
            'rent_from' => '2020-08-06',
            'rent_until' => '2022-08-06',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('lessee')->insert([
            'nik' => '3578224203750001',
            'nama' => 'Moeljo Fetri Wismadianita',
            'jenis_kelamin' => 'Wanita',
            'umur' => '46',
            'rented_house' => 'B1',
            'rent_from' => '2020-08-06',
            'rent_until' => '2022-08-06',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('lessee')->insert([
            'nik' => '3203011002720011',
            'nama' => 'Bahar',
            'jenis_kelamin' => 'Pria',
            'umur' => '49',
            'rented_house' => 'F3',
            'rent_from' => '2018-04-27',
            'rent_until' => '2021-04-27',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('lessee')->insert([
            'nik' => '3401024303810001',
            'nama' => 'Puji Astuti',
            'jenis_kelamin' => 'Wanita',
            'umur' => '40',
            'rented_house' => 'F3',
            'rent_from' => '2018-04-27',
            'rent_until' => '2021-04-27',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('lessee')->insert([
            'nik' => '3171041703910005',
            'nama' => 'Musfiq Amrulloh',
            'jenis_kelamin' => 'Pria',
            'umur' => '30',
            'rented_house' => 'A2',
            'rent_from' => '2017-12-08',
            'rent_until' => '2022-12-08',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('lessee')->insert([
            'nik' => '3307114404920004',
            'nama' => 'Fitrokhah Khasanah',
            'jenis_kelamin' => 'Wanita',
            'umur' => '29',
            'rented_house' => 'A2',
            'rent_from' => '2017-12-08',
            'rent_until' => '2022-12-08',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('lessee')->insert([
            'nik' => '3216136303940004',
            'nama' => 'Sunarti Dewi Lestari',
            'jenis_kelamin' => 'Wanita',
            'umur' => '27',
            'rented_house' => 'C5',
            'rent_from' => '2021-12-13',
            'rent_until' => '2021-12-13',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('lessee')->insert([
            'nik' => '3515181201960011',
            'nama' => 'Yogi Anas Aditia',
            'jenis_kelamin' => 'Pria',
            'umur' => '25',
            'rented_house' => 'C5',
            'rent_from' => '2021-12-13',
            'rent_until' => '2021-12-13',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('lessee')->insert([
            'nik' => '3402161903840001',
            'nama' => 'Nanang Nugroho',
            'jenis_kelamin' => 'Pria',
            'umur' => '37',
            'rented_house' => 'A1',
            'rent_from' => '2015-07-18',
            'rent_until' => '2025-07-18',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('lessee')->insert([
            'nik' => '3404035303860001',
            'nama' => 'Yusrina Nahdiya',
            'jenis_kelamin' => 'Wanita',
            'umur' => '35',
            'rented_house' => 'A1',
            'rent_from' => '2015-07-18',
            'rent_until' => '2025-07-18',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
    }
}
