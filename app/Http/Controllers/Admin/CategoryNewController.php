<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryNewController extends Controller
{
    public function index() {
        return view('backend.categorynew.index');
    }
}
