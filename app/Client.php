<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'state', 'address', 'wallet'];
}
