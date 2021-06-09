@extends('layouts.main')

@section('content')


    <hr>

<hr>
<h2 class="text-center">Phase de groupe</h2>
<hr>


@foreach ($groupes as $groupe)

@foreach ($groupe->matches as $matche)

@endforeach


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

            @foreach ($groupe->matches as $matche)
            <tr>
                <td scope="row" class="text-center"><img src="{{$matche->equipesD->avatare}}" width="20px"></td>
                <td class="text-center">{{$matche->equipesD->nom}}</td>
                <td class="text-center">0 - 0</td>
                <td class="text-center">{{$matche->equipesE->nom}}</td>
                <td class="text-center"><img src="{{$matche->equipesE->avatare}}" width="20px"></td>
                </tr>
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
end
@endsection




