<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getCircle()
    {
        return view('circle');
    }

    public function getEdit() {

        return view('edit');
    }

    public function postEdit(Request $request) {
        $this->validate($request, [
            'name'=>'alpha|max:50',
            'username'=>'alpha|max:50',
            
            ]);
        Auth::user()->update([
            'name'=>$request->input('name'),
            'username'=>$request->input('username'),
            ]);
        return redirect() 
        ->route('edit')
        ->with('info', 'Your profile has been updated.');
    }
}
