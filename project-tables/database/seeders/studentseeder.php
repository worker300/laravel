<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/student.json');
        $student = collect(json_decode($json));

        $student->each(function($data){
            student::create([
                'name'=> $data->name,
                'email'=> $data->email,
                'age'=> $data->age,
                'city'=> $data->city
            ]);

        });
    }
}
