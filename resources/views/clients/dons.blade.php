@extends("clients.master")

@section('main')
<center>
    <h1>All Dons</h1>
</center>
<table class="table container mt-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Dons</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dons as $d)
        <tr>
            <th scope="row">{{$d->id}}</th>
            <td>{{$d->name}}</td>

        </tr>
        @endforeach


    </tbody>
  </table>
@endsection
