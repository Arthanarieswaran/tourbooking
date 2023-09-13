<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        $places=DB::table('places')->get();

        return view('auth.home',[
            'places'=>$places
        ]);
    }
}
