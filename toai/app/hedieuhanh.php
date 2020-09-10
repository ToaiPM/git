<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hedieuhanh extends Model
{
    protected $table='hedieuhanh';
    protected $fillable=['id','TenHDH'];
    protected $hidden=['created_at','updated_at'];
}
