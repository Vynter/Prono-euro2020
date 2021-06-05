<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Equipe;
use App\Models\Groupe;
use App\Models\article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.rank');
    }
    public function liste()
    {


        //$article = article::all();
        //$user = User::get();
        //$artz = article::find(1)->user();


        $teams = Equipe::all();
        //$groups = Groupe::find(1)->equipes();



        $groupes = Groupe::all();
        //dd($groupes->equipes);
        return view('pages.showGroupe', compact('teams', 'groupes'));
    }
}