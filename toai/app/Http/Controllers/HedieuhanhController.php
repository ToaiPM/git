<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HedieuhanhRequest;
use App\hedieuhanh;

class HedieuhanhController extends Controller
{
    public function index()
    {
    	$hedieuhanh=hedieuhanh::all();
    	return view('hedieuhanh.danhsach',compact('hedieuhanh'));
    }
    public function create()
    {
        return view('hedieuhanh.them');
    }
    public function store(HedieuhanhRequest $rq)
    {
        $hedieuhanh=new hedieuhanh();
        $hedieuhanh->TenHDH=$rq->TenHDH;
        $hedieuhanh->save();
        return redirect()->route('he-dieu-hanh.index')->with(['thongbao_them_hdh'=>'Thêm thành công '.$rq->TenHDH]);
    }
    public function edit($id)
    {
        $hedieuhanh=hedieuhanh::find($id);
        return view('hedieuhanh.sua',compact('hedieuhanh'));
    }
    public function update(HedieuhanhRequest $rq, $id)
    {
        $tencu=hedieuhanh::find($id)->TenHDH;
        $hedieuhanh=hedieuhanh::find($id);
        $hedieuhanh->TenHDH=$rq->TenHDH;
        $hedieuhanh->save();
        return redirect()->route('he-dieu-hanh.index')->with(['thongbao_sua_hdh'=>'Đã sửa <strong>'.$tencu.'</strong> thành <strong>'.$rq->TenHDH.'</strong>']);
    }
    public function destroy($id)
    {
        $TenHDH= hedieuhanh::find($id)->TenHDH;
        hedieuhanh::find($id)->delete();
        return redirect()->route('he-dieu-hanh.index')->with(['thongbao_xoa_hdh'=>'Xóa thành công '.$TenHDH]);
    }
    public function show()
    {

    }
    public function getTimHDH(Request $rq)
    {
        $TuKhoa=$rq->TuKhoa;
        $TuKhoa=str_replace(' ', '%', $TuKhoa);
        $hedieuhanh=hedieuhanh::where('TenHDH','like','%'.$TuKhoa.'%')->get();
        $soluong=hedieuhanh::count();
        return view('hedieuhanh.danhsach',compact('hedieuhanh'));
    }
}
