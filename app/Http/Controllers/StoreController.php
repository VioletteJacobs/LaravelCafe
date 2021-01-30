<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(){
        $horaire=[
            (object)['jour'=>"Sunday", 'heure'=>"Closed"],
            (object)['jour'=>"Monday", 'heure'=>"7:00 AM to 8:00 PM"],
            (object)['jour'=>"Tuesday", 'heure'=>"7:00 AM to 8:00 PM"],
            (object)['jour'=>"Wednesday", 'heure'=>"7:00 AM to 8:00 PM"],
            (object)['jour'=>"Thursday", 'heure'=>"7:00 AM to 8:00 PM"],
            (object)['jour'=>"Friday", 'heure'=>"7:00 AM to 8:00 PM"],
            (object)['jour'=>"Saturday", 'heure'=>"9:00 AM to 5:00 PM"]
        ];
        $i =0;
        return view('pages.store',compact('horaire','i'));
    }
}
