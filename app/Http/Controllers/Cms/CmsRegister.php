<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CmsRegister extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.login.index');
    }

    public function login(Request $request)
    {
        // Auth::login($user);
        // User::get
        // $user = User::where('email', $request->email)->first();
        // $logged = Auth::login($user, $remember = true);
        // if ($logged)
        // return view('cms.home.index');
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd(User::where('email', $request->email)->first());
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('cms.home');
        }
        dd($request);
        return back()->withErrors([
            'email' => 'O seguinte email não está cadastrado ou não bate com a senha fornecida.',
        ]);
        

    }

    public function register()
    {
        return view('cms.login.register');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(RegisterFormRequest $request)
    {
        $request->password = bcrypt($request->password);
        $contact = User::create($request->all());
            
        if ($contact)
        return redirect()->route(route:'cms.login.index')->with([
            'success' => true,
            'message' => 'O usuário foi criado com sucesso'
        ]);
    }

    public function logout(Request $request)
    {
        // Auth::logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();
        Session::flush();
        
        Auth::logout();

        return redirect('/');
    }

}
