<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table='sanpham';
    protected $fillable=['id','TenSP','GiaBan','HinhAnh','MoTa','TinhTrang','loaisp_id','hedieuhanh_id','hangsx_is'];
    protected $hidden=['created_at','updated_at'];
}
