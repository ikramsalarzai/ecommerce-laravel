<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model implements Authenticatable 
{
    use AuthenticatableTrait;
    use HasFactory;

    protected $table = 'customers';
    
    // Your model code goes here
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}



 
