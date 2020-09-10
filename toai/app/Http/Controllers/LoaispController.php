<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoaispRequest;
use App\loaisp;

class LoaispController extends Controller
{
    public function index()
    {
    	$loaisp=loaisp::all();
    	return view('loaisp.danhsach',compact('loaisp'));
    }
    public function create()
    {
        return view('loaisp.them');
    }
    public function store(LoaispRequest $rq)
    {
        $loaisp=new loaisp();
        $loaisp->TenLoaiSP=$rq->TenLoaiSP;
        $loaisp->save();
        return redirect()->route('loai-san-pham.index')->with(['thongbao_them_lsp'=>'Thêm thành công '.$rq->TenLoaiSP]);
    }
    public function edit($id)
    {
        $loaisp=loaisp::find($id);
        return view('loaisp.sua',compact('loaisp'));
    }
    public function update(LoaispRequest $rq, $id)
    {
        $tencu=loaisp::find($id)->TenLoaiSP;
        $loaisp=loaisp::find($id);
        $loaisp->TenLoaiSP=$rq->TenLoaiSP;
        $loaisp->save();
        return redirect()->route('loai-san-pham.index')->with(['thongbao_sua_lsp'=>'Đã sửa <strong>'.$tencu.'</strong> thành <strong>'.$rq->TenLoaiSP.'</strong>']);
    }
    public function destroy($id)
    {
        $TenLoaiSP= loaisp::find($id)->TenLoaiSP;
        loaisp::find($id)->delete();
        return redirect()->route('loai-san-pham.index')->with(['thongbao_xoa_lsp'=>'Xóa thành công '.$TenLoaiSP]);
    }
    public function show()
    {

    }
    public function getTimLoaiSP(Request $rq)
    {
        $TuKhoa=$rq->TuKhoa;
        $TuKhoa=str_replace(' ', '%', $TuKhoa);
        $loaisp=loaisp::where('TenLoaiSP','like','%'.$TuKhoa.'%')->get();
        $soluong=loaisp::count();
        return view('loaisp.danhsach',compact('loaisp'));
    }
}
