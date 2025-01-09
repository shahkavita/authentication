<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user=collect([
            [
                'name'=>'Parv Patel',
                'email'=>'parv12@gmail.com',
                'password'=>'parv12'
            ],
            [
                'name'=>'Pruthvi Patel',
                'email'=>'pruthvi@gmail.com',
                'password'=>'pruthvi12'
            ]
        ]);
        $user->each(function($d){
            user::create($d);
        });

    }
}
