<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = collect([
            [
                'name' => 'krutan',
                'email' => 'krutan@gmail.com'
            ],
            [
                'name' => 'ajay',
                'email' => 'ajay@gmail.com'
            ],
            [
                'name' => 'piraj',
                'email' => 'piraj@gmail.com'
            ],
            [
                'name' => 'dhiren',
                'email' => 'dhiren@gmail.com'
            ],
            
        ]);

        $users->each(function($user){
            user::insert($user);
        });
    }
}
