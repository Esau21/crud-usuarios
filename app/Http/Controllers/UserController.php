<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));

        $user = DB::table('users')->select('id', 'name', 'email')->where('name', 'LIKE', '%' .$texto. '%')->orderBy('name','asc')->paginate(5);
        return view('usuarios.index', compact('user', 'texto'));
    }

    public function create()
    {
        $user = User::all();
        return view('usuarios.create', compact('user'));
    }

    public function store()
    {
        $data = request()->all();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect('/usuarios');
    }


    public function edit($id)
    {
        return view('usuarios.edit',[

            'usuarios' => User::find($id)
        ]);
    }

    public function update(Request $request)
    {
        $users = User::find($request->id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = bcrypt($users['password']);

        $users->save();

        return  redirect('/usuarios')->with('success', 'Project aangepast');
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return redirect('/usuarios');
    }
}
