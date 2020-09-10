<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\SanphamRequest;
use App\sanpham;
use App\loaisp;
use App\hangsx;
use App\hedieuhanh;
use DB;

class SanphamController extends Controller
{
    public function index()
    {
    	$sanpham=sanpham::all();
    	return view('sanpham.danhsach',compact('sanpham'));
    }
    public function show($id)
    {
    	$sanpham=DB::table('sanpham')
    	->join('loaisp','loaisp.id','=','sanpham.loaisp_id')
    	->join('hedieuhanh','hedieuhanh.id','=','sanpham.hedieuhanh_id')
    	->join('hangsx','hangsx.id','=','sanpham.hangsx_id')
    	->select('sanpham.*','loaisp.TenLoaiSP','hedieuhanh.TenHDH','hangsx.TenHangSX')
    	->where('sanpham.id',$id)
    	->first();
    	return view('sanpham.chitiet',compact('sanpham'));
    }
    public function destroy($id)
    {
    	$TenSP=sanpham::find($id)->TenSP;
    	sanpham::find($id)->delete();
    	return redirect()->route('san-pham.index')->withInput()->with(['thongbao_xoa_sp'=>'Xóa thành công <strong>'.$TenSP.'</strong>']);
    }
    public function getTimSanPham(Request $rq)
    {
        $TuKhoa=$rq->TuKhoa;
        $TuKhoa=str_replace(' ', '%', $TuKhoa);
        $sanpham=sanpham::where('TenSP','like','%'.$TuKhoa.'%')->get();
        $soluong=sanpham::count();
        return view('sanpham.danhsach',compact('sanpham'));
    }
    public function create()
    {
        $loaisp=loaisp::all();
        $hangsx=hangsx::all();
        $hedieuhanh=hedieuhanh::all();
    	return view('sanpham.them',compact(['loaisp','hangsx','hedieuhanh']));
    }
    public function store(SanphamRequest $rq)
    {
        $img=$rq->file('HinhAnh');
        $img_name=$img->getClientOriginalName();//ten file
        $url='public/img/product';//duong dan chua file
        $img->move($url,$img_name);//chuyen file vao duong dan
        $sanpham=new sanpham();

        $sanpham->TenSP=$rq->TenSP;
        $sanpham->HinhAnh=$img_name;
        $sanpham->loaisp_id=$rq->loaisp_id;
        $sanpham->hangsx_id=$rq->hangsx_id;
        $sanpham->hedieuhanh_id=$rq->hedieuhanh_id;
        $sanpham->GiaBan=$rq->GiaBan;
        $sanpham->MoTa=$rq->MoTa;
        $sanpham->TinhTrang=$rq->TinhTrang;
        $sanpham->save();
        return redirect()->route('san-pham.index')->withInput()->with(['thongbao_them_sp'=>'Xóa thành công <strong>'.$rq->TenSP.'</strong>']);
    }
}
