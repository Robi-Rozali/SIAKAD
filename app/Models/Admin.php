<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\ContractAutMustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'id';

    protected $fillable = [
    	'username',
    	'password',
    ];

    protected $hidden = [
    	'password',
    	'remember_token',
    ];
}
