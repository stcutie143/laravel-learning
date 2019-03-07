<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
       return view('welcome',
           [
           'tasks' => ['Hindi ako marunong mag code',
                        'Aaralin ko pa arrays. Aray!',
                        'Mag PDO pa tau, pero, hindi ako pedo']]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
