<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Equipe;
use App\Models\Groupe;
use App\Models\article;
use App\Models\Matche;
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


        $teams = Equipe::with('matches')->get();

        //$groups = Groupe::find(1)->equipes();


        $matches = Matche::with('equipes')->get();

        //$groupes = Groupe::all();
        $groupes = Groupe::with('equipes')->get();
        //dd($groupes);
        return view('pages.showGroupe', compact('teams', 'groupes', 'matches'));
    }
}