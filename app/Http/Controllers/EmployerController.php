<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Don;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view("employers.all" , compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view("employers.edit",compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "email"=>"required",
            "password"=>"nullable",
            "solde"=>"required"
        ]);

        Client::where("id",$id)->update($validatedData);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->back();
    }
    public function alldons(){
        $dons = Don::all();
        return view("employers.dons",compact("dons"));
    }
    public function donclients(String $id){
       $don = Don::findOrFail($id);
       return view("employers.don_clients",compact("don")) ;
    }
}
