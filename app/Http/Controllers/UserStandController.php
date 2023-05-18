<?php

namespace App\Http\Controllers;

use App\Models\UserStand;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserStandRequest;
use App\Http\Requests\UpdateUserStandRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserStandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreUserStandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserStandRequest $request)
    {
        if ($request->validated()) {

            $userStand = UserStand::create([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'profession' => $request->profession,
                'company' => $request->company,
                'password' => Hash::make($request->password)
            ]);



            // $user->notify(new PreRegisterMS($user));
        }
        return redirect('/sucess')->with('success', 'Data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserStand  $userStand
     * @return \Illuminate\Http\Response
     */
    public function show(UserStand $userStand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserStand  $userStand
     * @return \Illuminate\Http\Response
     */
    public function edit(UserStand $userStand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserStandRequest  $request
     * @param  \App\Models\UserStand  $userStand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserStandRequest $request, UserStand $userStand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserStand  $userStand
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserStand $userStand)
    {
        //
    }



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'profession' => ['required|string|max:50'],
            'company' => ['nullable|string|max:25'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
}
