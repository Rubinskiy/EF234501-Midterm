<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RantController extends Controller
{
    public function create() {
        return view('create');
    }

    public function rants() {
        return view('rants');
    }
}
