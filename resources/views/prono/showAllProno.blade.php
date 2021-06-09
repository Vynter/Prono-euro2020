@extends('layouts.main')
@section('content')

<table class="table">
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
</table>

<div class="mb-5 pb-5"></div>

@endsection
