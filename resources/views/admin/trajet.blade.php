@extends('layoutsadmin.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <div class="card col-md-8 offset-2 mt-3">
        <form action="/storeTrajet" method="post">
            @csrf
            <div class="card-header text-center bg-dark text-white">Ajout Trajet</div>
            <div class="form-group">
                <label for="" >REGION</label>
                <select name="zone_id" id="" class="form-control" required>
                    <option value="">----Faites Votre Choix----</option>
                    @foreach ($zones as $zone)
                        <option value="{{$zone->id}}">{{ $zone->nomZone }}</option>
                    @endforeach
                </select>
                <label for="">Itinéraire</label>
                <input type="text" class="form-control" name="nomTrajet">
                <label for="">Tarifs</label>
                <input type="number" min="1000" class="form-control" name="tarif">
            </div>
            <button type="submit" class="btn btn-dark offset-5 mt-2">Enregistrer</button>
        </form>
    <div>
@endsection