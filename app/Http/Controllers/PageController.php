<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Equipe;
use App\Models\Groupe;
use App\Models\Matche;
use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $groupesName = Groupe::all();
        return view('pages.rank', compact('groupesName'));
    }
    public function liste()
    {

        //$article = article::all();
        //$user = User::get();
        //$artz = article::find(1)->user();


        //$teams = ""; // Equipe::with('matchesD')->with('matchesE')->get();

        //$groups = Groupe::find(1)->equipes();


        //$matches = Matche::with('equipesD')->with('equipesE')->get();
        //$matcheUn =  Matche::where('id', '=', 3)->with('equipesD')->with('equipesE')->get();


        //$groupes = Groupe::all();
        //$groupes =  Groupe::with('matches')->get();
        //$groupesNE = Groupe ;
        //dd($groupes);
        //$users = \DB::select("SELECT DISTINCT nom FROM groupes as g , matches as m WHERE g.id = m.groupe_id ")->with('matches')->get();

        $users = DB::table('groupes')
            ->join('matches', 'groupes.id', '=', 'matches.groupe_id')
            ->select('groupes.id')
            ->distinct()->get();


        /*$groupes = Groupe::with(['matches' => function ($query) {
            $query->where('groupe_id',  [1, 2]);
        }])->get();*/
        //dd($users);

        $grp = [];


        //$us = $users;
        //dd($users);

        foreach ($users as $u => $key) {
            //dd($key['id']);
            array_push($grp, collect($key));
        }

        //dd($grp);
        $groupes = Groupe::whereIn('id', $grp)->with('matches')->get();



        return view('pages.showGroupe', compact('groupes'));
    }

    public function groupe($id)
    {
        $groupes = Groupe::whereId($id)->with('matches')->get();


        return view('pages.showGroupe', compact('groupes'));
    }
}