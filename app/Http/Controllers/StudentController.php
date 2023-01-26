<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function display(){

        // return redirect()->route('index')->with('students', Student::orderByDesc('id')->get());
        return view('index')->with('students', Student::orderByDesc('created_at')->get());
    }
    public function create (Request $request){
        $student = new Student;
        $student->name = $request->name; 
        $student->email = $request->email; 
        $student->age = $request->age; 
        $student->save();

        return redirect()->route('index')->with('success','New student added!'); 
    }
    public function delete ($id){
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('index')->with('success','Deleted Student!'); 
    }

    public function edit ($id){
        $student = Student::find($id);
        

        return view('edit')->with('student',$student);  // yung 'student' ay variable na gagamitin sa edit.blade
        // view gagamitin kapag mag newnew page

        // redirect naman kapag same page parin.
    }
    
    public function update (Request $request){
        $student = Student::find($request->id);
        $student->name = $request->name; 
        $student->email = $request->email; 
        $student->age = $request->age; 
        $student->save();

        return redirect()->route('index')->with('success','Student Updated!'); 
    }
}
