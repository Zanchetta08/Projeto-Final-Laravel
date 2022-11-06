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
    public function index() {
        $search = request('search');
            if($search) {
                $users = User::where([
                    ['name', 'like', '%'.$search.'%']
                ])->get();
            } else {
                $users = User::paginate(10);
            }

        return view('home',['users' => $users, 'search' => $search]);
    }

    public function show()
    {
        return view('users.show');
    }

    public function edit() {
        return view('users.edit');
    }

    public function update(Request $request) {

        User::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg', 'Usuário editado com sucesso!');
    }

    public function destroy($id) {
       
        User::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Usuário excluido com sucesso!');
    }
}
