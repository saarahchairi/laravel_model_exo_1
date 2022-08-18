<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $x = users::all();
        return view("welcome", compact("x"));
    }
}
