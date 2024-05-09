@extends("employers.master")
@section('main')
    <center>
        <h1 class="mt-5">Modifier Le Client</h1>
    </center>
    <form action="{{route("clients.update",$client->id)}}" method="post" class="container mt-5">
        @csrf
        @method("PUT")
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Nom</span>
            <input type="text" name="nom" value="{{$client->nom}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div> <br>
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Prenom</span>
            <input type="text" name="prenom" value="{{$client->prenom}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div> <br>
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Email</span>
            <input type="text" name="email"value="{{$client->email}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div>
        <br>
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
            <input type="text" name="password"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div> <br>
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Solde</span>
            <input type="number" name="solde" value="{{$client->solde}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div> <br>

        <button class="btn btn-warning">Modifier</button>
    </form>
@endsection
