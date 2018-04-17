<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home(){
        $people = ['Matt', 'Chris', 'Steven'];
        return view('welcome', [
            'people' => $people
        ]);
    }
    public function about(){
        return view('pages.about');
    }
}
