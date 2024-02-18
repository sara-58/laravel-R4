<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();
        return view('index', compact('teachers'));
    }
    public function about()
    {
        return view('about');
    }
    public function team()
    {
        $teachers = Teacher::get();
        return view('team', compact('teachers'));
    }
    public function action()
    {
        return view('action');
    }
    public function classes()
    {
        return view('classes');
    }
    public function appointment()
    {
        return view('appointment');
    }
    public function contact()
    {
        return view('contact');
    }
    public function facilities()
    {
        return view('facilities');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function error()
    {
        return view('error');
    }
    public function jointeam()
    {
        return view('jointeam');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
