<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $user = User::all()->count();
        return view('frontend.index');
    }
}
