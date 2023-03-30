@extends('layoutsadmin.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<div class="container mt-5">
    <div class="card col-md-8 offset-md-2">
        <div class="h4 text-center bg-primary p-2 text-white">Formulaire de Zone</div>
        <div class="card-body">
            <form action="/store" class="align-middle" method="post">
                @csrf
                <div class="mt-3">
                    <label for="" class="col-md-4 h5 pt-1">AJOUT REGION</label>
                    <select name="nomZone" id="" class="form-control">
                        <option value="Dakar">Dakar</option>
                        <option value="Thies">Thies</option>
                        <option value="StLouis">StLouis</option>
                        <option value="Tamba">Tamba</option>
                        <option value="Kaolack">Kaolack</option>
                        <option value="Fatick">Fatick</option>
                        <option value="Kédougou">Kédougou</option>
                    </select>
                </div>
                <br><br>
                    <button type="submit" class="btn btn-primary offset-5">Enregistrer</button>
                
            </form>
        </div>
    </div>
</div>
@endsection

