<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Traits\Common;

class UserController extends Controller
{
    use Common;
    private $columns =[
        'name',
        'email',
        'password',
        'mobile',
        'image',
        'active',
        'email_verified_at',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('dashboard.userList', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'mobile' => ['required', 'string', 'max:12'],
            'image' => ['required', 'mimes:png,jpg,jpeg', 'max:2048'],
        ]);

        $data['image'] = $this->uploadFile($request->image, 'assets\images');

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile'],
            'image' => $data['image'],
            'active' => $data['active'] ?? true,
            'email_verified_at' => now(),
        ]);

        return redirect()->route('users');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.userDetails', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.editUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'mobile' => ['required', 'string', 'max:12'],
            'image' => ['required', 'mimes:png,jpg,jpeg', 'max:2048'],
        ]);

        if (isset($request->image)) {
            $data['image'] = $this->uploadFile($request->image, 'assets\images');
        }
        
        User::where('id', $id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile'],
            'image' => $data['image'],
            'active' => $data['active'] ?? true,
        ]);

        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('users');
    }

    public function delete(string $id): RedirectResponse
    {
        User::where('id', $id)->forceDelete();
        return redirect()->route('trashedUser');
    }

    public function trashed()
    {
        $users = User::onlyTrashed()->get();
        return view('dashboard.trashedUsers', compact('users'));
    }

    public function restore(string $id): RedirectResponse
    {
        User::where('id', $id)->restore();
        return redirect()->route('users');
    }
}
