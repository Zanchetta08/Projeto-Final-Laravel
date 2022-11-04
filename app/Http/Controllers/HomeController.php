<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request) {

        User::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg', 'Usuário editado com sucesso!');
    }
}
