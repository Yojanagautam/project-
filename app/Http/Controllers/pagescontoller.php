<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    public function home(){
        $data=[
           'name'=>'yojana gautam',
            'age'=>17
        ];
        return view('welcome')->with($data);
    }
    public function profile(){
        $data=[
            'name'=>'yojana gautam ',
            'age'=>17
        ];
        return view('profile')->with($data);
}
    public function create(){
        return view('create');
    }
    public function store(Request $request){
       $Student=new Student();
       $Student->name=$request->name;
       $Student->attandence=$request->attandence;
       $Student->age=$request->age;
       $img=Image::make($request->file('image'));
       $filename=$request->file('image')->getClientOriginalName();
       $img->save('storage/image/'.$filename);
       $Student->image=$filename;
       $Student->save();
       return "Saved";


}

public function list(){
        $students=Student::get();
        return view('List')->with('students',$students);
}
    public function edit($id){
    $student=Student::where('id',$id)->first();
        //$student=Student::find($id);
    return view('update')->with('student',$student);

   }
public function update(Request $request) {
    $student=Student::where('id',$request->id)->first();
    $student->name=$request->name;
    $student->attandence=$request->attandence;
    $student->age=$request->age;
    $student->save();

    return redirect("/List");



}}