<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:200'],
            'birth' => ['date_format:Y-m-d', 'max:200'],
            'email' => ['required', 'email', 'max:200'],
            'password' => ['required', 'string', 'max:200']
        ]);

        User::create([
            'name' => $validated['name'],
            'last_name' => $validated['last_name'],
            'birth' => $validated['birth'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['email'])
        ]);

        return redirect()->route('quiz');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arr = array();
        $arr['user'] = User::find($id);

        if(!$arr['user']) {
            exit;
        }

        return view('profile', $arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Tela editar perfil
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Atualizar os dados da tela de perfil
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Excluir perfil
    }
}
