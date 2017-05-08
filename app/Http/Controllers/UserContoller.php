<?php

namespace YoungLife\Http\Controllers;

use YoungLife\User;
use Illuminate\Http\Request;

class UserContoller extends Controller
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        //validate
        $this->validate(request(), [

            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required', 'unique',
            'email' => 'email',
            'gender' => 'required',
            'usertype_id' => 'required',
            'datejoined' => 'nullable'
        ]);
//        //create and save

        $password = bcrypt(str_random(10));
        $user = User::create(request(['firstname','lastname','username','email','gender','usertype_id','password','datejoined']));
//        send email/text>>with link to set password

        //redirect to


    }

    /**
     * Display the specified resource.
     *
     * @param  \YoungLife\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \YoungLife\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \YoungLife\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \YoungLife\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
