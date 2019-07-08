<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Philippe;

class HomeController extends Controller
{

    private $Prenom = "Alexandre";
    private $nom = "DOUCHET";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::get();
        $Philippe = philippe::get();
        return view('home', compact('Philippe', 'articles'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function test()
    {
        $Prenom =  $this->Prenom;
        $Nom    =  $this->nom;
        return view('test', compact('Prenom', 'nom'));
    }
}
