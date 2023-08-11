<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.index', [
            // 'user' => $user,
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('dashboard.user.create', [
        //     'users' => User::all()
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'image' => 'image|file|max:1024',
        //     'name' => 'required|max:255',
        //     'username' => ['required', 'min:3', 'max:255'],
        //     'email' => 'required|email',
        //     'password' => 'required|min:5|max:255'
        // ]);
        
        // if($request->file('image')){
        //     $image = $request->file('image')->store('user-images-profile');
        // } else {
        //     $image = null;
        // }

        // $data = [
        //     'image' => $image,
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ];

        // User::create($data);

        // return redirect('/dashboard/user')->with('success', 'New User has been Added!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // return view('dashboard.user.show', [
        //     'user' => $user
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'user' => $user,
            'users' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'image' => 'image|file|max:1024',
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email',
            'password' => 'required|min:5|max:255'
        ]);
        
        // $validatedData = $request->validate($rules);

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('user-images-profile');
        // }

        if($request->file('image')){
            $image = $request->file('image')->store('user-images-profile');
        } else {
            $image = null;
        }

        $data = [
            'image' => $image,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::where('id', $user->id)->update($data);

        return redirect('/dashboard/user')->with('success', 'New User has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // if($user->image){
        //     Storage::delete($user->image);
        // }

        // User::destroy($user->id);
        // return redirect('/dashboard/user')->with('success', 'User has been Deleted!');
    }
}
