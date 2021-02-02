<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{   public function about(){
    $database2 = About:: all();
        return view('pages.about', compact('database2'));
    }
}
