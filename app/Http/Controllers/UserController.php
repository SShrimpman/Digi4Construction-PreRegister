<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreuserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\PreRegisterMS;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.form.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreuserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreuserRequest $request)
    {

        if ($request->validated()) {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'company' => $request->company,
                'password' => Hash::make($request->password)
            ]);



            // $user->notify(new PreRegisterMS($user));
            return redirect('/')->with('success', 'Data saved');
        }
        return back()->withErrors($request->validated())->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuserRequest  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }

    // public function store(Request $request)
    // {

    //   if ($request->validated()) {

    // $user = User::create([
    //     'name' => $request->name,
    //     'last_name' => $request->last_name,
    //     'email' => $request->email,
    //     'profession' => $request->profession,
    //     'company' => $request->company,
    //     'password' => Hash::make($request->password)
    // ]);



    // $user->notify(new PreRegisterMS($user));
    // return redirect('/form')->with('success', 'Data saved');

    //  }
    //  }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'company' => ['nullable|string|max:25'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function store(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'last_name' => $data['lastname'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
}
