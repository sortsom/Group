<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
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

    public function destroy($id)
    {
        $users = User::find($id);
        if ($users != null) {
            $users->delete();
            return redirect('users')->with('Success', 'User is deleted');
        } else {
            return redirect('$users')->with('Fail', 'User is not found!');
        }
    }
}
