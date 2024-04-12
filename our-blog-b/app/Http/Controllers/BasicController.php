<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    function hello() {
        return 'Hello World from BasicController class!';
    }
}
