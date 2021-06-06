@extends('layouts.main')

@section('content')
    <table class="table shadow p-3 mb-5 bg-body rounded">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col" class="text-center">Group 1</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://www.countryflags.io/pt/shiny/64.png" width="20px">
                </td>
                <td class="text-center">Portugal</td>
                <td class="text-center">0 - 0</td>
                <td class="text-center">France</td>
                <td class="text-center"><img src="https://www.countryflags.io/fr/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://www.countryflags.io/CZ/shiny/64.png" width="20px">
                </td>
                <td class="text-center">Croatie</td>
                <td class="text-center">1 - 5</td>
                <td class="text-center">Portugal</td>
                <td class="text-center"><img src="https://www.countryflags.io/PT/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://i.eurosport.com/_iss_/geo/country/flag/medium/4386.png"
                        width="20px">
                </td>
                <td class="text-center">Pays de Galles</td>
                <td class="text-center">18h</td>
                <td class="text-center">Macédoine du Nord</td>
                <td class="text-center"><img src="https://www.countryflags.io/MK/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td ><div class="d-flex justify-content-center">
                    <a href="{{route('prono')}}" class="btn btn-outline-dark">Vos pronostics du jours</a>
                    </div></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <hr>
    <table class="table shadow p-3 mb-5 bg-body rounded">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col" class="text-center">Group 1</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://www.countryflags.io/pt/shiny/64.png" width="20px">
                </td>
                <td class="text-center">Portugal</td>
                <td class="text-center">0 - 0</td>
                <td class="text-center">France</td>
                <td class="text-center"><img src="https://www.countryflags.io/fr/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://www.countryflags.io/CZ/shiny/64.png" width="20px">
                </td>
                <td class="text-center">Croatie</td>
                <td class="text-center">1 - 5</td>
                <td class="text-center">Portugal</td>
                <td class="text-center"><img src="https://www.countryflags.io/PT/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://i.eurosport.com/_iss_/geo/country/flag/medium/4386.png"
                        width="20px">
                </td>
                <td class="text-center">Pays de Galles</td>
                <td class="text-center">18h</td>
                <td class="text-center">Macédoine du Nord</td>
                <td class="text-center"><img src="https://www.countryflags.io/MK/shiny/64.png"
                        width="20px"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td ><div class="d-flex justify-content-center">
                    <a href="{{route('prono')}}" class="btn btn-outline-dark">Vos pronostics du jours</a>
                    </div></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>



    <mark>Debut de teams</mark>
    @foreach ($teams as $team)
        <p>{{$team->nom}} <span></span> </p>
        <p>{{$team->groupe->nom}}</p>
        <hr>
    @endforeach
<mark>Fin de teams</mark>

    @foreach ($groupes as $i)
        <div>
        {{  $i->nom}}

        </div>
            <ul>
                @foreach ($i->equipes as $it)
                <li> l'équipe: {{$it->nom}}</li>
                {{($it->matches)}}
                    @foreach ($it->matches as $mt)
                        {{($mt)}}
                    @endforeach
                @endforeach

            </ul>

    @endforeach

    <p>Ca commence ici</p>
    @foreach ($groupes as $groupe)
    <table class="table shadow p-3 mb-5 bg-body rounded">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col" class="text-center">{{$groupe->nom}}</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>



            @foreach ($groupe->equipes as $equipe)

            @foreach ($equipe->matches as $m)
            <p>{{($m)}}</p>


            @if ($loop->first)
            <tr>
                <td scope="row" class="text-center"><img
                        src="https://www.countryflags.io/pt/shiny/64.png" width="20px">
                </td>

                    <td class="text-center">{{$m->pivot->nom}}</td>

            @endif

            @if ($loop->last)
                <td class="text-center">0 - 0</td>

                <td class="text-center">{{$m->equipe_id}}</td>

                    <td class="text-center"><img src="https://www.countryflags.io/fr/shiny/64.png"
                    width="20px"></td>
                </tr>
            @endif

            @endforeach



            @endforeach


            <td></td>
            <td></td>
            <td ><div class="d-flex justify-content-center">
                <a href="{{route('prono')}}" class="btn btn-outline-dark">Vos pronostics du jours</a>
                </div></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
    @endforeach



<hr>
@foreach ($teams as $team)
<!--  $team->matches --><br>
@foreach ( $team->matches as $show)
{{$show->pivot->equipe_id}}

@endforeach

@endforeach


<hr>



<table class="table shadow p-3 mb-5 bg-body rounded">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col" class="text-center">{{$groupe->nom}}</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>

<i class="fas fa-sign-in-alt"></i>
finale
@foreach ($matches as $matche)
{{$matche->id}}<br>
@foreach ($matche->equipes as $equipe)

@if ($loop->first)
<tr>
    <td scope="row" class="text-center"><img
            src="{{$equipe->avatare}}" width="20px">
    </td>

        <td class="text-center">{{$equipe->nom}}</td>

@endif

@if ($loop->last)
    <td class="text-center">0 - 0</td>

    <td class="text-center">{{$equipe->nom}}</td>

        <td class="text-center"><img src="{{$equipe->avatare}}"
        width="20px"></td>
    </tr>
@endif


@endforeach

<hr>

@endforeach            <td></td>
<td></td>
<td ><div class="d-flex justify-content-center">
    <a href="{{route('prono')}}" class="btn btn-outline-dark">Vos pronostics du jours</a>
    </div></td>
<td></td>
<td></td>
</tr>
</tbody>
@endsection


