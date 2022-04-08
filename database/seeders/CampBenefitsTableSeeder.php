<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampsBenefit;

class CampBenefitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps_benefits = [
            [
                'camp_id' => '1',
                'name' => 'Pro Stechtack Kit',
            ],
            [
                 'camp_id' => '1',
                'name' => 'iMac Pro 2021 & Display',
            ],
            [
                 'camp_id' => '1',
                'name' => '1-1 Mentoring Program',
            ],
            [
                 'camp_id' => '1',
                'name' => 'Final Project Certificate',
            ],
            [
                 'camp_id' => '1',
                'name' => 'Offline Course Videos',
            ],
            [
                 'camp_id' => '1',
                'name' => 'Future Job Opportinity',
            ],
            [
                 'camp_id' => '1',
                'name' => 'Premium Design Kit',
            ],
            [
                 'camp_id' => '1',
                'name' => 'Website Builder',
            ],
            [
                 'camp_id' => '2',
                'name' => '1-1 Mentoring Program',
            ],
            [
                 'camp_id' => '2',
                'name' => 'Final Project Certificate',
            ],
            [
                 'camp_id' => '2',
                'name' => 'Offline Course Videos',
            ],
            [
                 'camp_id' => '2',
                'name' => 'Website Builder',
            ],
        ];

        //Make cara yang ke 2 JANGAN LUPA SETTING DI DATABASE SEEDER
        CampsBenefit::insert( $camps_benefits);
    }
}
