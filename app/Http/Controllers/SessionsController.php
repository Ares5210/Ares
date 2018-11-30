<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
    	return view('sessions.create');
    }

    public function store(Request $request)
    {
    	$data = $this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
		]);

		if(Auth::attempt($data, $request->has('remember'))) {
			session()->flash('success', '欢迎回来~');
			return redirect()->route('users.show', Auth::user()->id);
		} else {
			session()->flash('danger', '您的用户名和密码不匹配~');
			return back();
		}
    }

    public function destroy()
    {
    	Auth::logout();

    	session()->flash('success', '退出成功~');
    	return redirect()->route('login');
    }
}
