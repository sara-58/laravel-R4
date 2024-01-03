<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;
use Illuminate\Http\RedirectResponse;

class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials= Testimonial::get();
        return view('testimonial',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addTestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'testimonialName'=>'required|string',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'review'=>'required|string',
            'subject'=>'required|string',
        ]);

        if($request->hasfile('image')){
            $fileName = $this->uploadFile( $request->image, 'assets/img');
            $data['image']=$fileName;
        }   
        Testimonial::create($data);
        return redirect('testimonial');

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
