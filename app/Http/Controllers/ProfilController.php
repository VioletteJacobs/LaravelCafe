<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        $contenu=[
            (object)['id'=>1,"titre"=>"Worth Drinking", 'buttonVisit'=>"visit us today", 'promise'=>"Our promise"],
        ];
        return view('welcome', compact('contenu'));
    }
    public function about(){
        return view('pages.about');
    }
    public function product(){
        return view('pages.product');
    }
    public function store(){
        return view('pages.store');
    }
    //
}
