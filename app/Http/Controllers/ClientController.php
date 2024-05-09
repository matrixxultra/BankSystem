<?php

namespace App\Http\Controllers;

use App\Models\Don;
use App\Models\Client;
use App\Models\Virement;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $solde = Client::find(auth()->guard("client")->user()->id)->solde;
        $virements = Client::find(auth()->guard("client")->user()->id)->virements;
        return view("clients.virements",compact("virements","solde"));
    }
    public function create(){
        return view("clients.ajouter");
    }
    public function verifier(){
        //
    }
    public function store(Request $req){
        $client = Client::find(auth()->guard("client")->user()->id);
        $validated = $req->validate([
            "montant"=>"required",
            "motif"=>"required",
            "compteb"=>"required"
        ]);
        $validated["client_id"] = auth()->guard("client")->user()->id;
        if ($client->solde > $req->input("montant")) {
            // $client->solde = $client->solde - $req->input("montant");
            Client::where("id",auth()->guard("client")->user()->id)->update(["solde"=>$client->solde - $req->input("montant")]) ;
            Virement::create($validated);
            return redirect()->back()->with("success" , "vous N'avez Pas ce Montant pour retirer");;

        }
        else{
            return redirect()->back()->with("failed" , "vous N'avez Pas ce Montant pour retirer");

        }
    }
    public function ajouter(){
        return view("clients.retrait");
    }
    public function retrait(Request $req){
        $client = Client::findOrFail(auth()->guard("client")->user()->id);
        $req->validate([
            "solde"=>"required|numeric"
        ]);
       if($client->solde > $req->input("solde")){
        Client::where("id",auth()->guard("client")->user()->id)->update(["solde"=>$client->solde - $req->input("solde")]) ;
        return redirect()->back()->with("success" , "Validé");;

       }
       else{
        return redirect()->back()->with("failed" , "vous N'avez Pas ce Montant pour retirer");

       }
    }
    public function alldons(){
        $dons = Client::findOrFail(auth()->guard("client")->user()->id)->dons;
        return view("clients.dons",compact("dons"));
    }
    public function create_don(){
        $dons = Don::all();
        return view("clients.createdon",compact("dons"));
    }
    public function store_don(Request $req){
        $client = Client::findOrFail(auth()->guard("client")->user()->id);
        $client->dons()->attach($req->dons);
        return redirect("/dons");

    }
    public function deconnect(){
        auth()->logout();
        session()->flush();
        return redirect('/');
    }
}
