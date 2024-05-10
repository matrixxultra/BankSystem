@extends("employers.master")
@section('main')
<center>
    <h1>All Dons</h1>
</center>
<table class="table container mt-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Dons</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dons as $d)
        <tr>
            <th scope="row">{{$d->id}}</th>
            <td>{{$d->name}}</td>
            <td><a class="btn btn-warning" href="/clients/dons/{{$d->id}}">Afficher les Clients</a></td>

        </tr>
        @endforeach


    </tbody>
  </table>
@endsection
