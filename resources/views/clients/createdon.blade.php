@extends('clients.master')

@section('main')
<center>
    <h1>Ajouter Un Don</h1>
</center>
<form action="/don/store" method="post" class="container mt-5">
    @csrf
    @foreach ($dons as $d)
      <input type="checkbox" name="dons[]" value="{{$d->id}}"> <h6>{{$d->name}}</h6>  <br>
    @endforeach
    <button class="btn btn-success">Envoyer</button>
</form>
@endsection
