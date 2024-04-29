<?php

namespace Database\Seeders;

use App\Models\citie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class citieseeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(path:'database/json/city.json');
        $city = collect(json_decode($json));

        $city->each(function($data){
            citie::create([
                'city'=> $data->city
            ]);
        });
    }
}
