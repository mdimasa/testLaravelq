<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $p1 = 'Dimasz - using Controllers';
        return view('about',['p1' => $p1]);
    }
}