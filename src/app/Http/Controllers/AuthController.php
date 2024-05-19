<?php

namespace App\Http\Controllers;


use App\Http\Requests\AuthorRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('/auth/register');
    }

    public function register(AuthorRequest $request)
    {
        return redirect('/auth/login');
    }


}


