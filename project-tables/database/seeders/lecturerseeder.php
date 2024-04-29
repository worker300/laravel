<?php

namespace Database\Seeders;

use App\Models\lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class lecturerseeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(path:'database/json/lecturer.json');
        $lecturer = collect(json_decode($json));

        $lecturer->each(function($data){
            lecturer::create([
                'name'=> $data->name,
                'email'=> $data->email,
                'age'=> $data->age,
                'city'=> $data->city
            ]);

        });
    }
}
