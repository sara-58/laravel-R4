<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Teacher;
use App\Traits\Common;
use Illuminate\http\RedirectResponse;

class ClassController extends Controller
{
    use Common;
    private $columns=[
        'className',
        'capicity',
        'age',
        'timeFrom',
        'timeTo',
        'price',
        'teacher_id',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes=Classes::get();
        return view('dashboard.classList',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::select('id', 'teacherName')->get();
        return view('dashboard.addClass', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'className'=>'required|string',
            'capicity'=>'required|string',
            'age'=> 'required|integer',
            'price'=> 'required|integer',
            'timeFrom'=>'required',
            'timeTo'=>'required',
        ]);
        $data['teacher_id'] = $request['teacher_id'];
        Classes::create($data);
        return redirect()->route('classes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers = Teacher::select('id', 'teacherName')->get();
        $class = Classes::findOrFail($id);
        return view('dashboard.classDetails',compact('class','teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers = Teacher::select('id', 'teacherName')->get();
        $class = Classes::findOrFail($id);
        return view('dashboard.editClass', compact('class', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'className' => 'required|string',
            'capicity' => 'required|string',
            'age' => 'required|integer',
            'price' => 'required|integer',
            'timeFrom' => 'required',
            'timeTo' => 'required',
        ]);
        $data['teacher_id'] = $request['teacher_id'];
        Classes::where('id',$id)->update($data);
        return redirect()->route('classes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Classes::where('id', $id)->delete();
        return redirect()->route('classes');
    }
    public function delete(string $id): RedirectResponse
    {
        Classes::where('id', $id)->forceDelete();
        return redirect()->route('trashedClass');
    }

    public function trashed()
    {
        $classes = Classes::onlyTrashed()->get();
        return view('dashboard.trashedClass', compact('classes'));
    }

    public function restore(string $id): RedirectResponse
    {
        Classes::where('id', $id)->restore();
        return redirect()->route('classes');
    }
}