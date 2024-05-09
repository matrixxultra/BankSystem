<?php

namespace App\Models;
use App\Models\Don;
use App\Models\Virement;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable as AuthTraits;

class Client extends Model implements AuthTraits
{
    use HasFactory;
    use Authenticatable;
    protected $fillable = [
        "nom",
        "prenom",
        "email",
        "password",
        "solde"
    ];
    public function virements(){
        return $this->hasMany(Virement::class);
    }
    public function dons(){
        return $this->belongsToMany(Don::class);
    }
}
