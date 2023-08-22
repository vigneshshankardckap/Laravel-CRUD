<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    //   mass aassigment allows to what are given then store from database 
    protected $fillable=['name','email','phone','joining_date','salary'];

    //not for mass assigment 

    // protected $guarded =[];
}
