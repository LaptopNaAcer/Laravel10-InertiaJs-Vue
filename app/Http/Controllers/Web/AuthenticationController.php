<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        //
        return Inertia::render('Auth/Login');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function authenticate(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout()
    {
    }
}
