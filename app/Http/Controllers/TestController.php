<?php

namespace App\Http\Controllers;

use App\Test;

class TestController extends Controller
{
    public function index() {

        $test = Test::all();

        return view('test.test', compact('test'));
    }

    public function create() {

        return view('test.create');
    }

    public function store() {

        $test = new Test();

        $test->name = request('name');
        $test->age = request('age');

        $test->save();

        return redirect('/test');
    }
}
