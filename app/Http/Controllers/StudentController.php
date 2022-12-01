<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phone;
use App\Models\student;

class StudentController extends Controller
{
    //
    public function getStudent()
    {
        $studentData=student::all();
        return $studentData;
    }

    public function addData()
    {
        $phone=new phone();
        $phone->phone='9087554621';
        $student=new student();
        $student->name='Mike';
        $student->email='mike@gmail.com';
        $student->image='new_img_mike';
        $student->save();
        $student->phone()->save($phone);
        return "Data Inserted";

    }
}
