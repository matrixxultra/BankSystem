@extends("employers.master")
@section('main')
<center>
    <h1 class="mt-5">Tous Les Clients</h1>
</center>
<table class="table table-striped container mt-5">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Email</th>
        <th scope="col">Solde</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($clients as $c)
        <tr>
            <th scope="row">{{$c->nom}}</th>
            <td>{{$c->prenom}}</td>
            <td>{{$c->email}}</td>
            <td>{{$c->solde}} DH</td>
            <td><a href="{{route("clients.edit",$c->id)}}" class="btn btn-warning" >Modifier</a></td>
            <td><form action="{{route("clients.destroy",$c->id)}}" method="post">
                @csrf
                @method("delete")
                <button class="btn btn-danger">Delete</button>
            </form></td>
          </tr>
        @endforeach


    </tbody>
  </table>
@endsection
