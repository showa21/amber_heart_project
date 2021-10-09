<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert
        (
            [
    
                    [
                        'name' => 'Web Development',
                        'award' => 'PHP Level 1 Certificate Certificate',
                        'duration' =>'One Year',
                        'modality' => 'online/campus',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ],

                    [
                        'name' => 'Customer Service',
                        'award' => 'Customer Service certificate',
                        'duration' =>'Six months',
                        'modality' => 'online/campus',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ],
                    [
                        'name' => 'Introduction to Computer Programming',
                        'award' => 'Programming certificate',
                        'duration' =>'six months',
                        'modality' => 'online/campus',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ],
                    [
                        'name' => 'Introduction to Virtual Reality',
                        'award' => 'VR certificate',
                        'duration' =>'eight months',
                        'modality' => 'online/campus',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ],
                    [
                        'name' => 'Cybersecurity and Mobility',
                        'award' => 'security plus certificate',
                        'duration' =>'One Year',
                        'modality' => 'online/campus',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]

        ]);
                    
    } 
        
            


   
    
}
