<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaniloController extends Controller
{
    public function index()
    {
        return view('danilo.index');
    }
}
