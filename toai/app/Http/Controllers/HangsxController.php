<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HangsxRequest;
use App\hangsx;

class HangsxController extends Controller
{
    public function index()
    {
    	$hangsx=hangsx::all();
    	return view('hangsx.danhsach',compact('hangsx'));
    }
    public function create()
    {
        return view('hangsx.them');
    }
    public function store(HangsxRequest $rq)
    {
        $hangsx=new hangsx();
        $hangsx->TenHangSX=$rq->TenHangSX;
        $hangsx->save();
        return redirect()->route('hang-san-xuat.index')->with(['thongbao_them_hsx'=>'Thêm thành công '.$rq->TenHangSX]);
    }
    public function edit($id)
    {
        $hangsx=hangsx::find($id);
        return view('hangsx.sua',compact('hangsx'));
    }
    public function update(HangsxRequest $rq, $id)
    {
        $tencu=hangsx::find($id)->TenHangSX;
        $hangsx=hangsx::find($id);
        $hangsx->TenHangSX=$rq->TenHangSX;
        $hangsx->save();
        return redirect()->route('hang-san-xuat.index')->with(['thongbao_sua_hsx'=>'Đã sửa <strong>'.$tencu.'</strong> thành <strong>'.$rq->TenHangSX.'</strong>']);
    }
    public function destroy($id)
    {
        $TenHangSX= hangsx::find($id)->TenHangSX;
        hangsx::find($id)->delete();
        return redirect()->route('hang-san-xuat.index')->with(['thongbao_xoa_hsx'=>'Xóa thành công '.$TenHangSX]);
    }
    public function show()
    {

    }
    public function getTimHangSX(Request $rq)
    {
        $TuKhoa=$rq->TuKhoa;
        $TuKhoa=str_replace(' ', '%', $TuKhoa);
        $hangsx=hangsx::where('TenHangSX','like','%'.$TuKhoa.'%')->get();
        $soluong=hangsx::count();
        return view('hangsx.danhsach',compact('hangsx'));
    }
}
