<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Virement extends Model
{
    use HasFactory;
    protected $fillable = [
        "montant",
        "motif",
        "client_id",
        "compteb"
    ];
    public function client(){
        return $this->belongsTo(Client::class);
    }
}
