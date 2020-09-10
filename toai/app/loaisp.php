<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    protected $table='loaisp';
    protected $fillable=['id','TenLoaiSP'];
    protected $hidden=['created_at','updated_at'];
}
