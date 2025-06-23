<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;

class StudentsController extends Controller
{

    public function index(){
    
        $students = Student::orderBy('created_at', 'asc')->paginate(5);
        return view('students.index', compact('students'));
    }

    public function create(){

        return view('students.create');

    }

    public function store(Request $request){
    
        $validatedData = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|string|email|unique:students,email',
            'phone_number' => 'required|digits:10|unique:students,phone_number',
        ]);

        Student::create($validatedData);

        return redirect()->route('students.index')->with('success', 'Estudante criado com sucesso!');

    }

    public function show($id){
    
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));

    }

    public function edit($id){
    
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));

    }

    public function update(Request $request, Student $student){
    
        $validatedData = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('students', 'email')->ignore($student->id),
            ],
            'phone_number' => [
                'required',
                'digits:10',
                Rule::unique('students', 'phone_number')->ignore($student->id),
            ],
        ]);

        $student->update($validatedData);

        return redirect()->route('students.index')->with('success', 'Dados do Estudante actualizados com sucesso!');

    }

    public function destroy($id){
    
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Estudante eliminado com sucesso!');

    }
}