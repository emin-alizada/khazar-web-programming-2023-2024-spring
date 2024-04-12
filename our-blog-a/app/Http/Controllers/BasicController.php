<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    function greeting() {
        return 'Greeting from our very first controller!';
    }
}
