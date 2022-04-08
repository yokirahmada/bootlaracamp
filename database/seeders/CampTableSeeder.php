<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => 280,
                 //wajib dilakukan bila menggunakan cara ke 2
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 180,
                 //wajib dilakukan bila menggunakan cara ke 2
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        //cara pertama tidak perlu menginput created at updated at
       // foreach ($camps as $key => $camp){
         //   Camp::create($camp);
       // }

        //cara kedua wajib menginput created at updated at JANGAN LUPA SETTING DI DATABASE SEEDER
       Camp::insert($camps);
    }
}
