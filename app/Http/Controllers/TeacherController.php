<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Traits\Common;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class TeacherController extends Controller
{
    use Common;
    private $columns=[
        'teacherName',
        'email',
        'password',
        'teacherImage',
        'position',
        'facebook',
        'twitter',
        'instagram',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();
        return view('dashboard.teacherList', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.addTeacher');
    }

    public function jointeam()
    {
        return view('jointeam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'teacherName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'teacherImage' => ['required', 'mimes:png,jpg,jpeg', 'max:2048'],
            'position' => ['required', 'string'],
            'facebook' => ['required', 'string'],
            'twitter' => ['required', 'string'],
            'instagram' => ['required', 'string'],
        ]);

        $data['teacherImage'] =$this->uploadFile($request->teacherImage, 'assets/images');

        Teacher::create([
            'teacherName' => $data['teacherName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'teacherImage' => $data['teacherImage'],
            'position' => $data['position'],
            'facebook' => $data['facebook'],
            'twitter' => $data['twitter'],
            'instagram' => $data['instagram'],
        ]);
        return redirect()->route('teachers');
    }

    public function joinTeacher (Request $request): RedirectResponse
    {
        $data = $request->validate([
            'teacherName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'teacherImage' => ['required', 'mimes:png,jpg,jpeg', 'max:2048'],
            'position' => ['required', 'string'],
            'facebook' => ['required', 'string'],
            'twitter' => ['required', 'string'],
            'instagram' => ['required', 'string'],
        ]);

        $data['teacherImage'] = $this->uploadFile($request->teacherImage, 'assets/images');

        Teacher::create([
            'teacherName' => $data['teacherName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'teacherImage' => $data['teacherImage'],
            'position' => $data['position'],
            'facebook' => $data['facebook'],
            'twitter' => $data['twitter'],
            'instagram' => $data['instagram'],
        ]);
        return redirect()->route('team');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('dashboard.teacherDetails', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('dashboard.editTeacher', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'teacherName' => 'required|string',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'teacherImage' => 'required|mimes:png,jpg,jpeg|max:2048',
            'position' => 'required|string',
            'facebook' => 'required|string',
            'twitter' => 'required|string',
            'instagram' => 'required|string',
        ]);
        if (isset($request->teacherImage)) {
            $data['teacherImage'] = $this->uploadFile($request->teacherImage, 'assets\images');
        }
        Teacher::where('id', $id)->update($data);
        return redirect()->route('teachers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::where('id', $id)->delete();
        return redirect()->route('teachers');
    }
    public function delete(string $id): RedirectResponse
    {
        Teacher::where('id', $id)->forceDelete();
        return redirect()->route('trashedTeacher');
    }

    public function trashed()
    {
        $teachers = Teacher::onlyTrashed()->get();
        return view('dashboard.trashedTeacher', compact('teachers'));
    }

    public function restore(string $id): RedirectResponse
    {
        Teacher::where('id', $id)->restore();
        return redirect()->route('teachers');
    }

}
