<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        $database1= Home:: all();
        // $contenu=[
        //     (object)['titre'=>"Worth Drinking", 'sousTitre'=> "Fresh coffee", 'para'=> "Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!", 'buttonVisit'=> "visit us today"],
        //     (object)['titre'=>"to you", 'sousTitre'=> "Our promise", 'para'=>"When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!" ]
        // ];
        return view('welcome', compact("database1"));
    }
}
