<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
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

    public function show() {
      $users = DB::table('users')->get();
      return view('users.index', ['users' => $users]);
    }

    public function showEdit($id) {
      $user = DB::table('users')->where('id', $id)->first();
      return view('users.edit', ['user' => $user]);
    }

    public function postEdit(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'user_type' => 'required'
      ]);
      $user =  new User();
      $user->exists = true;
      $user->id = $request->get('user_id');
      $user->name =  $request->get('name');
      $user->email =  $request->get('email');
      $user->user_type = $request->get('user_type');
      $user->save();
      return redirect()->route('showUsers');
    }

    public function delete($id) {
      $user = DB::table('users')->where('id', $id)->delete();
      return redirect()->route('showUsers');
    }
}
