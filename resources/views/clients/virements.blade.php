@extends("clients.master")
@section('main')
<center>
    <h1 class="mt-5">Tous Les Virements</h1>
    <h5>Votre Solde Actuel est {{$solde}} DH</h5>
</center>
<table class="table container mt-5">
    <thead>
      <tr>
        <th scope="col">Montant</th>
        <th scope="col">Motif</th>
        <th scope="col">Compte Bénéficiere</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($virements as $v)
        <tr>
            <th scope="row">{{$v->montant}}</th>
            <td>{{$v->motif}}</td>
            <td>{{$v->compteb}}</td>

        </tr>
        @endforeach


    </tbody>
  </table>
@endsection
