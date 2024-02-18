<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;
use Illuminate\Http\RedirectResponse;

class TestimonialController extends Controller
{
    use Common;
    private $columns=[
        'testimonialName',
        'image',
        'review',
        'subject',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials= Testimonial::get();
        return view('dashboard.testimonialList',compact('testimonials'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimonial');
    }
    public function add()
    {
        return view('dashboard.addTestimonial');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'testimonialName'=>'required|string',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'review'=>'required|string',
            'subject'=>'required|string',
        ]);
        if($request->hasfile('image')){
            $fileName = $this->uploadFile( $request->image, 'assets/images');
            $data['image']=$fileName;
        }
        Testimonial::create($data);
        return redirect()->route('testimonials');
    }

    public function save(Request $request)
    {
        $data = $request->validate([
            'testimonialName' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'review' => 'required|string',
            'subject' => 'required|string',
        ]);
        if ($request->hasfile('image')) {
            $fileName = $this->uploadFile($request->image, 'assets/images');
            $data['image'] = $fileName;
        }
        Testimonial::create($data);
        return redirect()->route('testimonial');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('dashboard.testimonialDetails', compact('testimonial'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('dashboard.editTestimonial', compact('testimonial'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'testimonialName' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'review' => 'required|string',
            'subject' => 'required|string',
        ]);
        if (isset($request->image)) {
            $data['image'] = $this->uploadFile($request->image, 'assets\images');
        }
        Testimonial::where('id', $id)->update($data);
        return redirect()->route('testimonials');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Testimonial::where('id', $id)->delete();
        return redirect()->route('testimonials');
    }
    public function delete(string $id): RedirectResponse
    {
        Testimonial::where('id', $id)->forceDelete();
        return redirect()->route('trashedTestimonial');
    }

    public function trashed()
    {
        $testimonials = Testimonial::onlyTrashed()->get();
        return view('dashboard.trashedTestimonials', compact('testimonials'));
    }

    public function restore(string $id): RedirectResponse
    {
        Testimonial::where('id', $id)->restore();
        return redirect()->route('testimonials');
    }
}
