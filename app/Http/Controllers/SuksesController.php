<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuksesController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.sukses-checkout');
    }
}
