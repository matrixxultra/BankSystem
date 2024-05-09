@extends("clients.master")
@section('main')
    <center><h1>Effectuer Un Virement</h1></center>
    @if (session()->has("success"))
    <div class="alert alert-success container" role="alert">
         {{Session::get("success")}}
      </div>
    @endif
    @if (session()->has("failed"))
    <div class="alert alert-danger container" role="alert">
         {{Session::get("failed")}}
      </div>
    @endif
    <form action="/virements/store" method="post" class="container mt-5">
        @csrf
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Solde</span>
            <input type="number" name="montant"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div> <br>
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Motif</span>
            <input type="text" name="motif"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div> <br>
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Compte Benificiere</span>
            <input type="text" name="compteb"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div> <br>
        <button class="btn btn-primary">Confirmer</button>
    </form>
@endsection
