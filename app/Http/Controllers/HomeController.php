<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
     * @return Renderable
     */
    public function index()
    {
        $users = user::all();
        return view('index', ['users' => $users]);
    }
    public function edit($id){

    }

    public function update(Request $request,$id){
        $user = User::findOrFail($id);
       $user->update([
           'name'=>$request->name,
           'email'=>$request->email,
       ]);
        return redirect('/administrator');

    }

    public function destroy($id): RedirectResponse
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/administrator')->with('Success', 'User is deleted');
    }
    public function  edit($id)
    {
    }
    public function  update( Request $request, $id){
        $user=User::findOrFail($id);
        $user->update([
            name=>$request->name,
            email=>$request->email,
        ]);
    }
}
