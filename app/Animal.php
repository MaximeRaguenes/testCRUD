<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{ 
    protected $fillable = ['type', 'name', 'description'];

    public function __construct(){
        
    }
}
