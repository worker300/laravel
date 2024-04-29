<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function showstudent(){
        // $students = DB::table('students')
        // ->select('students.*','cities.city')
        // // ->join('cities','students.city','=','cities.id')
        // ->leftjoin('cities','students.city','=','cities.id')
        // // ->where('cities.city','=','Chicago')
        // // ->select(DB::raw('count(*) as student_count'),'cities.city')
        // // ->groupBy('city', 'age')
        // // ->orderBy('student_count', 'desc')
        // // ->havingBetween('student_count',[1,3])
        // // ->count();
        // ->get();


        $students = DB::table('students')
                    ->leftjoin('cities',function(JoinClause $join){
                            $join->on('students.city', '=' , 'cities.id')
                                ->where('students.name','like', 'a%');
                    })
                    ->select('students.*', 'cities.city')
                    ->get();

        // return $students;
        return view('welcome' , compact('students'));
    }


    public function uniondata(){
        $lecturers = DB::table('lecturers')
                    // ->select('name', 'email' , 'lecturers.city')
                    ->join('cities', 'lecturers.city' , '=' , 'cities.id')
                    ->where('lecturers.city' ,'=', 'cities.Chicago');

                    $students = DB::table('students')
                    ->union($lecturers)
                    // ->select('name', 'email', 'students.city')
                    ->join('cities', 'students.city' , '=' , 'cities.id')
                    ->where('students.city' ,'=', 'New York')
                    ->get();

                    return $students;
    }

    public function whendata(){

        $test = false;

        $students = DB::table('students')
        ->when($test,function($query){
            $query->where('age', '>',20);
        },function($query){
            $query->where('age', '<',20);
        })
        ->get();
        return $students;
    }
    
    
    public function chunkdata(){

        // $students = DB::table('students')
        //     ->orderBy('id')
        //     ->chunkById(3,function($students){
        //         echo "<div style='border:1px solid red;margin-bottom:15px' >";
        //         foreach($students as $student){
        //             echo $student->name. "<br>";
        //         }
        //         echo "</div>";
        //     });
            
            $students = DB::table('students')
                ->orderBy('id')
                ->chunkById(3,function($students){

                    foreach($students as $student){
                        $students = DB::table('students')
                        ->where('id',$student->id )
                        ->update(['status' => true]);

                    }
                });
        }

    public function showStudents1()
    {
        // $students = DB::select("select name,age from students where id = :id",['id' => 2]);
        
        // $students = DB::insert("insert into students() values (?,?,?,?,?)",[55,"sujit","sujit@gmail.com", 25 , 3]);
        
        // $students = DB::update("update students set email = 'teast@gmail.com' where id = ? ",[2]);
        
        // $students = DB::delete("delete from students where id = ? ",[55]);
        
        // $students = DB::unprepared("delete from students where id = 55 ");

        // $students = DB::statement("drop table students");

        $students = DB::table('students')
                        // ->selectRaw('count(*) as student_count , age ' )
                        ->select(DB::raw('count(*) as student_count'),'age')
                        // ->whereRaw('age < ? or name like ?',[25, 's%'])
                        ->groupByRaw('age')
                        ->havingraw('age < ?',[20])
                        ->toSql();

        return $students;
    }
    
}
 