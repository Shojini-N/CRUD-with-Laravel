<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function insert_data()
    {
        return view('forminsert');
    }

    public function upload(Request $request1)
    {
        $student=new student;
        $student->name=$request1->name;
        $student->email=$request1->email;
        $image=$request1->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request1->image->move('student',$imagename);
        $student->image=$imagename;
        $student->save();
        return redirect()->back();
    }


    public function view_data()
    {
        $data=student::all();
        return view('viewdata',compact('data'));
    }

    public function delete($id)
    {
        $data=student::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_view($id)
    {
        $data=student::find($id);
        return view('updatedata',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $student=student::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('student',$imagename);
        $student->image=$imagename;
        $student->save();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $search=$request->search;
        $a1;
        $data=student::where('name','like','%'.$search.'%')->orwhere('email','like','%'.$search.'%')->get();
        return view('viewdata',compact('data'));
    }
  
}
