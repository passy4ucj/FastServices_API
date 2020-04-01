<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = 'workers';
    protected $fillable = ['first_name', 'last_name', 'service_type', 'email', 'password', 'state', 'address', 'id_number', 'wallet'];
}
