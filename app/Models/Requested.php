<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Requested extends Model
{

    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
       'status',
        'etat',
        'type_vehicule',
        'prix',
        'arrive',
        'depart',
        'user_id'
    ];
}
