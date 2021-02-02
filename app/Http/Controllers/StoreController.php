<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(){
        $database4 = Store:: all();
        return view('pages.store',compact('database4'));
    }
}
