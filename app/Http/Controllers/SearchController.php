<?php

namespace App\Http\Controllers;

use DB;
 use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query= $request->input('query');
		if(!$query) {
			return redirect()->route('home');
		}
		$users= User::where("name", 'LIKE', "%{$query}%")
		->orWhere('username', 'LIKE', "%{$query}%")
		->get();

		return view('search')->with('users', $users);
    }
}
