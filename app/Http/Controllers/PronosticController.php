<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Matche;
use App\Models\Pronostic;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PronosticController extends Controller
{
    public function create()
    {
        return view('prono.create');
    }
    public function pronoStore()
    {
        //dd(request()->all());
        request()->validate([
            'pronoD' => 'required|integer',
            'pronoE' => 'required|integer',
        ]);
        $status = null;
        if ((request()->pronoD) > (request()->pronoE)) {
            $status = 1;
        } elseif ((request()->pronoD) < (request()->pronoE)) {
            $status = 2;
        } else {
            $status = 0;
        }
        //Pronostic::create()
        auth()->user()->pronostics()->create(request()->all() + [
            'status_prono' => $status,
            'date_prono' => now()->toDateTimeString()
        ]);
        //Alert::success('Success Title', 'Success Message');

        $groupesName = Groupe::all();
        alert()->success('Pronostic', 'Votre pronostic a bien était enregistré');

        return back();
        //return redirect()->route('dashboard', compact('groupesName'));
    }

    public function update($id)
    {

        request()->validate([
            'pronoDD' => 'required|integer',
            'pronoED' => 'required|integer',
            'matche_id' => 'required|integer',
            'id' => 'required|integer',

        ]);
        $status = null;

        if ((request()->pronoD) > (request()->pronoE)) {
            $status = 1;
        } elseif ((request()->pronoD) < (request()->pronoE)) {
            $status = 2;
        } else {
            $status = 0;
        }
        $pronostic = Pronostic::find($id);
        $pronostic->update([
            'pronoD' => request()->pronoDD,
            'pronoE' => request()->pronoED,
            'date_prono' => now()->toDateTimeString(),
            'status_prono' => $status,

        ]);
        alert()->success('Pronostric', 'Votre pronostric a bien était mise a jour');
        return redirect()->back();
        // return back()->with('update', 'ok');
    }

    public function pronoliste()
    {
        $groupesName = Groupe::all();
        // $users = DB::table('matches')
        //     ->join('groupes', 'groupes.id', '=', 'matches.groupe_id')
        //     ->join('matches', 'groupes.id', '=', 'matches.groupe_id')
        //     ->select('groupes.id')
        //     ->distinct()->get();
        $matchesPronostic = Pronostic::where('user_id', auth()->id())->with('matche')->get();
        $matchesDone = [];
        foreach ($matchesPronostic as $key => $value) {
            array_push($matchesDone, collect($value->matche_id));
        }
        // $prono = $matchesPronostic->diff(DB::table('matches')
        //     ->where('groupe_id', 1)
        //     ->whereNotIn('id', $matchesDone)
        //     ->get());
        // dd($prono);
        // $matchesNonjouer = DB::table('matches')
        //     ->where('groupe_id', 1)
        //     ->whereNotIn('id', $matchesDone)
        //     ->get();
        $matchesNonjouer = Matche::whereNotIn('id', $matchesDone)->orderBy('date_matche')->get();
        // initialisement c sa $matchesNonjouer = Matche::where('groupe_id', 1)->whereNotIn('id', $matchesDone)->get();
        //$prono = $matchesPronostic->diff(Matche::where('groupe_id', 1)->with('pronosticss')->get());
        //                                                              matchesPronostic  matchesNonjouer
        //alert()->success('Title', 'Lorem Lorem Lorem');
        return view('prono.showAllProno', compact('groupesName', 'matchesNonjouer', 'matchesPronostic'));
    }

    public function prono($id)
    {
        $groupesName = Groupe::all();
        $matchesPronostic = Pronostic::where('user_id', auth()->id())->with('matche')->get();
        $matchesDone = [];
        foreach ($matchesPronostic as $key => $value) {
            array_push($matchesDone, collect($value->matche_id));
        }
        $matchesNonjouer = Matche::where('groupe_id', $id)->whereNotIn('id', $matchesDone)->get();
        return view('prono.show', compact('groupesName', 'matchesNonjouer', 'matchesPronostic'));
    }
}