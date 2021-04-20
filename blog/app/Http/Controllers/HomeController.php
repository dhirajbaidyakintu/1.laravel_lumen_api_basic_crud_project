<?php
namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller{
    function studentDetailsSelect(Request $request){
        $SQL="SELECT * FROM student_details";
        $request=DB::select($SQL);  
        return $request;
    }
    function studentDetailsDelete(Request $request){
        $id=$request->input("id");
        $SQL= "DELETE FROM `student_details` WHERE `id`=?";
        $result= DB::delete($SQL,[$id]);
        if($result == true){
            return "Data Delete Successfully.";
        }else{
            return "Delete Fail? Try Again.";
        }
    }
    function studentDetailsCreate(Request $request){
        $name= $request->input("name");
        $roll= $request->input("roll");
        $city= $request->input("city");
        $phone= $request->input("phone");
        $class= $request->input("class");
        $SQL= "INSERT INTO `student_details`(`name`, `roll`, `city`, `phone`, `class`) VALUES (?,?,?,?,?)";
        $result=DB::insert($SQL,[$name,$roll,$city,$phone,$class]);
        if($result==true){
            return "Data Insert Successfully.";
        }else{
            return "Data Insert Failed! Try Again.";
        }
    }
    function studentDetailsUpdate(Request $request){
        $name= $request->input("name");
        $roll= $request->input("roll");
        $city= $request->input("city");
        $phone= $request->input("phone");
        $class= $request->input("class");
        $SQL= "UPDATE `student_details` SET `name`=?,`roll`=?,`city`=?,`phone`=? WHERE `class`=?";
        $result=DB::update($SQL, [$name, $roll, $city, $phone, $class]);
        if($result==true){
            return "Data Update Successfully.";
        }else{
            return "Data Update Failed! Try Again.";
        }
    }

}