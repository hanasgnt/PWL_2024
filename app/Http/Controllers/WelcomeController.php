<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function helloController()
    {
        return 'Hello World';
    }
    public function greetingController()
    {
        // return view('blog.hello', ['name' => 'Hana']);
        return view('blog.hello')->with('name', 'Hana')
            ->with('occupation', 'Astronaut');
    }
}
