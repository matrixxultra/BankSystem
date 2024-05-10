@extends("employers.master")
@section('main')
<center>
    <h1>les Clients Effectuer le Don {{$don->name}}</h1>
</center>
<table class="table container mt-5">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">E-mail</th>
        <th scope="col">Solde</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($don->clients as $c)
        <tr>

            <td>{{$c->nom}}</td>
            <td>{{$c->prenom}}</td>
            <td>{{$c->email}}</td>
            <td>{{$c->solde}} MAD</td>


        </tr>
        @endforeach


    </tbody>
  </table>
@endsection
