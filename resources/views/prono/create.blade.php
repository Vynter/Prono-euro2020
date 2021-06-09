

@section('content')

<table class="table">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th scope="col"  class="text-center">Pronostic à saisir </th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>


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
                <input name="PronoE" class="form-control  text-center" placeholder="..." >
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

    </form>
    @endforeach
    </tbody>
</table>


@endsection
