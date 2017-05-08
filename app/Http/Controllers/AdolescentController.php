<?php

namespace YoungLife\Http\Controllers;

use YoungLife\Adolescent;
use Illuminate\Http\Request;

class AdolescentController extends Controller
{

    public function index()
    {
        
        $adolescents = Adolescent::all();
        return view('adolescent.index',compact('adolescents'));
    }

    public function create()
    {
        return view('adolescent.create');
    }


    public function store(Request $request)
    {
//validate user input
        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'nullable',
            'nickname' => 'required|unique:adolescents',
            'gender' => 'required',
            'dateofbirth' => 'nullable'
        ]);
        Adolescent::create(request(['firstname', 'lastname', 'nickname', 'gender', 'dateofbirth']));
        return redirect('/');

    }

    public function show(Adolescent $adolescents)
    {
        //
        return view('adolescent.show');
    }


    public function edit(Adolescent $adolescents)
    {
        //
    }


    public function update(Request $request, Adolescent $adolescents)
    {
        //
    }

    public function destroy(Adolescent $adolescents)
    {
        //
    }
}
