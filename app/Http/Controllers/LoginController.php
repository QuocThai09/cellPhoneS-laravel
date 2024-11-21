<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register(){

        $school_db = School::all();
        $filter_school = School::where('school_name','%like%',);
        return view('register',['school_db'=>$school_db]);
    }

    public function filterSchool(Request $res){

        $val = $res->val;
        $filter_school = School::where('school_name','like','%'.$val.'%')->get();
        //dd( $filter_school);
        $output ='<ul>';
        foreach ($filter_school as $value) {
            $output .='<li>'. $value->school_name.'</li>';
        }
        $output .= '</ul>';
        $output .= `
        <script>
        $('.list-data li').each(function(){
            //console.log($(this).text())
            $(this).click(function(){
               console.log($(this).text())
               $('#school').val($(this).text())
            })
        })
        </script>`;
        return response()->json(['output'=>$output]);
    }

    public function checkSchoolName(Request $res){
        $val = $res->val;
        $check_school = School::where('school_name',$val)->exists();
        //dd($check_school);
        return response()->json(['output'=>$check_school]);
    }
}
