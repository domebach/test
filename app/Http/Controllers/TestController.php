<?php

namespace App\Http\Controllers;

use App\Test;

class TestController extends Controller
{
    public function index() {
        $test = Test::all();
        return view('test', compact('test'));
    }
}
