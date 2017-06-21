<?php

namespace App\Http\Controllers;
use DB;
use App\Student;
use Illuminate\Http\Request;

class Product_controller extends Controller
{
    public function myfunction()

    {
        $num1=3;
        $num2=2;
    	return view('satu', compact('num1', 'num2'));
    }

    public function perhitungan()
    {

        $num1=5;
        $num2=2;

        $add=($num1+$num2);
        $substraction=($num1-$num2);
        $divide=($num1*$num2);
        return view('satu', compact('add', 'substraction', 'divide', 'num1','num2'));
    }

    public function array()
    {
        $arr=array(1,2,3,4,5);

        return view('dua', compact('arr'));
    }
    public function testing()
    {

       // $students=DB::table('students')->get();
        $students=Student::all();
       
        // $male=DB::table('students')->where('gender', 0)->get();
       return view ('datastudents', compact('students'));
   }



   
}
