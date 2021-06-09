@extends('layouts.main')
@section('content')

    {{-- <table class="table">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th scope="col"  class="text-center">Pronostic N°5 </th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row" class="text-center"><img src="https://i.eurosport.com/_iss_/geo/country/flag/medium/4386.png" width="20px"></td>
                <td class="text-center">Pays de Galles</td>
                <td class="text-center">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control text-center" placeholder="..." aria-label="Username">
                        <span class="input-group-text">VS</span>
                        <input type="text" class="form-control  text-center" placeholder="..." aria-label="Server">
                    </div>
                </td>
                <td class="text-center">Macédoine du Nord</td>
                <td class="text-center"><img src="https://www.countryflags.io/MK/shiny/64.png" width="20px"></td>
            </tr>
            <tr></tr>
            <tr>
                <td scope="row" class="text-center"><img src="https://www.countryflags.io/pt/shiny/64.png" width="20px"></td>
                <td class="text-center">Portugal</td>
                <td class="text-center">
                    <div class="input-group mb-3">
                        <input disabled value="0" type="text" class="form-control text-center" placeholder="..." aria-label="Username">
                        <span class="input-group-text">VS</span>
                        <input disabled value="0" type="text" class="form-control  text-center" placeholder="..." aria-label="Server">
                    </div>
                </td>
                <td class="text-center">France</td>
                <td class="text-center"><img src="https://www.countryflags.io/fr/shiny/64.png" width="20px"></td>
            </tr>
        </tbody>
    </table> --}}
<div class="mb-5 pb-5"></div>
<hr>

    <table class="table">
        <thead>
            <tr>
                <h2 scope="col"  class="text-center">Pronostic Enregistré</h2>
                {{-- <th></th>
                <th></th>
                <th scope="col"  class="text-center">Pronostic Enregistrer </th>
                <th></th>
                <th></th> --}}
            </tr>
            <tr>

                <th></th>
                <th></th>
                <th scope="col"  class="text-center"></th>
                <th></th>
                <th></th>
            </tr>

        </thead>
        <tbody>
    @foreach ($matchesPronostic as $match)
        <tr>

            <form method="post" action="/pronostic/{{$match->id}}" >
                @method('PATCH')
                @csrf
                    <td scope="row" class="text-center col-1"><img src="{{$match->matche->equipesD->avatare}}" width="20px"></td>
                    <td class="text-center col-4">{{$match->matche->equipesD->nom}}</td>
                    <td class="text-center col-2">
                        <div class="input-group mb-3">
                            <input name="pronoDD" class="form-control text-center" placeholder="0" value="{{$match->pronoD}}">
                            <div> </div>
                            <input name="pronoED" class="form-control  text-center" placeholder="0" value="{{$match->pronoE}}">
                        </div>
                    </td>
                    <td class="text-center col-4">{{$match->matche->equipesE->nom}}</td>
                    <td class="text-center col-1"><img src="{{$match->matche->equipesE->avatare}}" width="20px"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td scope="col"  class="text-center"><input name="id" type="hidden" value={{$match->id}}><input name="matche_id" type="hidden" value={{$match->matche_id}}><input type="submit" class="btn btn-outline-dark" value="Mise a jour"></td>
            <td></td>
            <td></td>
        </tr>
            </form>
    @endforeach
    </tbody>
    </table>



<hr>
        <table class="table">
            <thead>
                <tr>
                    <tr>
                        <h2 scope="col"  class="text-center">Pronostic à saisir </h2>
                    </tr>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th scope="col"  class="text-center"></th>
                    <th></th>
                    <th></th>
                </tr>
                {{-- <tr class="p-1 mb-1 bg-dark text-white">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> --}}
            </thead>
            <tbody>
<tr>
    <div class="d-flex align-items-center justify-content-center">

        <td  scope="col" class="" colspan="5">
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

            @endif
        </td>


    </div>
</tr>
            @foreach ($matchesNonjouer as $matche)

            <form method="POST" action="{{route('prono.store')}}">
                @csrf

            <tr>
                <td></td>
                <td></td>
                <td scope="col"  class="text-center">{{$matche->date_publication}}<input name="matche_id" type="hidden" value={{$matche->id}}></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row" class="text-center col-1"><img src="{{$matche->equipesD->avatare}}" width="20px"></td>
                <td class="text-center col-4">{{$matche->equipesD->nom}}</td>
                <td class="text-center col-2">
                    <div class="input-group mb-3">
                        <input name="pronoD" class="form-control text-center" placeholder="...">
                        <div> </div>
                        <input name="pronoE" class="form-control  text-center" placeholder="..." >
                    </div>
                </td>
                <td class="text-center  col-4">{{$matche->equipesE->nom}}</td>
                <td class="text-center  col-1"><img src="{{$matche->equipesE->avatare}}" width="20px"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td scope="col"  class="text-center"><input type="submit" class="btn btn-outline-dark" value="Enregistrer"></td>
                <td></td>
                <td></td>
            </tr>
            {{-- <tr class="p-1 mb-1 bg-dark text-white">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr> --}}

            {{-- <tr>
                <td scope="row" class="text-center"><img src="https://www.countryflags.io/pt/shiny/64.png" width="20px"></td>
                <td class="text-center">Portugal</td>
                <td class="text-center">
                    <div class="input-group mb-3">
                        <input disabled value="0" type="text" class="form-control text-center" placeholder="..." aria-label="Username">
                        <span class="input-group-text">VS</span>
                        <input disabled value="0" type="text" class="form-control  text-center" placeholder="..." aria-label="Server">
                    </div>
                </td>
                <td class="text-center">France</td>
                <td class="text-center"><img src="https://www.countryflags.io/fr/shiny/64.png" width="20px"></td>
            </tr> --}}


            </form>
            @endforeach

            </tbody>
        </table>


@endsection
