<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hangsx extends Model
{
    protected $table='hangsx';
    protected $fillable=['id','TenHangSX'];
    protected $hidden=['created_at','updated_at'];
}
