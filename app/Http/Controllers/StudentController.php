<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Traits\Common;
use Illuminate\http\RedirectResponse;

class StudentController extends Controller
{
    use Common;
    private $columns = [
        'childName',
        'gurdianName',
        'childAge',
        'message',
        'gurdianEmail',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();
        return view('dashboard.studentList', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.addStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'childName' => 'required|string',
            'gurdianName' => 'required|string',
            'childAge' => 'required|integer',
            'message' => 'required|string',
            'gurdianEmail' => 'required|string| email|max:255',
        ]);
        Student::create($data);
        return redirect()->route('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('dashboard.studentDetails', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('dashboard.editStudent', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'childName' => 'required|string',
            'gurdianName' => 'required|string',
            'childAge' => 'required|integer',
            'message' => 'required|string',
            'gurdianEmail' => 'required|string| email|max:255',
        ]);
        Student::where('id', $id)->update($data);
        return redirect()->route('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::where('id', $id)->delete();
        return redirect()->route('students');
    }
    public function delete(string $id): RedirectResponse
    {
        Student::where('id', $id)->forceDelete();
        return redirect()->route('trashedStudent');
    }

    public function trashed()
    {
        $students = Student::onlyTrashed()->get();
        return view('dashboard.trashedStudent', compact('students'));
    }

    public function restore(string $id): RedirectResponse
    {
        Student::where('id', $id)->restore();
        return redirect()->route('students');
    }
}
