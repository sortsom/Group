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
    public function index(): Renderable
    {
        $users = user::all();
        return view('index', ['users' => $users]);
    }

<<<<<<< Updated upstream
    public function destroy($id)
=======



    public function destroy($id): RedirectResponse
>>>>>>> Stashed changes
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/administrator')->with('Success', 'User is deleted');
    }
}
