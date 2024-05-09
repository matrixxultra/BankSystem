<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model implements AuthTraits
{
    use HasFactory;
    use Authenticatable;
    protected $fillable = [
        "nom",
        "prenom",
        "email",
        "password",

    ];
}
