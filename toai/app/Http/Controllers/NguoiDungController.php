<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DangKyRequest;
use App\Http\Requests\ThongTinCaNhanRequest;
use App\Http\Requests\ThongTinDCGHRequest;
use\App\Http\Requests\ThongTinLSMHRequest;
use\App\Http\Requests\ThongTinPTTTRequest;
use\App\Http\Requests\CapnhatAdminRequest;
use App\User;
use Hash;
use Auth;

class NguoiDungController extends Controller
{
    public function getDangNhapDangKy()
    {
    	return view('nguoidung.dangnhapdangky');
    }
    public function postDangKy(DangKyRequest $request)
    {
    	$nd=new User();
    	$nd->name=$request->name;
    	$nd->phone=$request->phone;
    	$nd->email=$request->email;
    	$nd->password=Hash::make($request->password);
    	$nd->save();
    	return back()->with(['thongbao_dangky'=>'Sign Up Success']);
    }
    public function postDangNhap(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            if(Auth::user()->status==1)
            {
                return back()->withInput()->with(['thongbao_loi'=>'This account is locked']);
            }
            else
            {
                if(Auth::user()->permission==1)
                    return redirect()->route('getAdmin');
                else
                    return redirect()->route('getUser');
            }
        }
        else
        {
            return back()->withInput()->with(['thongbao_loi'=>'Login information is incorrect']);
        }
    }
    public function getAdmin()
    {
        return view('nguoidung.quantrivien');
    }
    public function getDangXuat()
    {
        Auth::logout();
        return redirect()->route('getUser');
    }
    public function getTaiKhoan()
    {
        $id=Auth::user()->id;
        $nd=User::find($id);
        return view('nguoidung.taikhoan',compact('nd'));
    }
    public function getCapNhatTTCN(ThongTinCaNhanRequest $request)
    {
        $id=Auth::user()->id;
        $nd=User::find($id);
        $nd->name=$request->name;
        $nd->phone=$request->phone;
        $nd->country=$request->country;
        $nd->state=$request->state;
        $nd->company=$request->company;
        $nd->email=$request->email;
        $nd->password=Hash::make($request->password);
        $nd->info=$request->info;
        $nd->save();
        return back()->withInput()->with(['thongbao_CNTTCN'=>'Update successful']);
    }
    public function getCapNhatTTDCGH(ThongTinDCGHRequest $request)
    {
        $id=Auth::user()->id;
        $nd=User::find($id);
        $nd->name=$request->name;
        $nd->phone=$request->phone;
        $nd->country=$request->country;
        $nd->state=$request->state;
        $nd->email=$request->email;
        $nd->address=$request->address;
        $nd->save();
        return back()->withInput()->with(['thongbao_CNDCGH'=>'Update successful']);
    }
    public function getCapNhatTTLSMH(ThongTinLSMHRequest $request)
    {
        $id=Auth::user()->id;
        $nd=User::find($id);
        $nd->name=$request->name;
        $nd->email=$request->email;
        $nd->phone=$request->phone;
        $nd->save();
        return back()->withInput()->with(['thongbao_CNLSMH'=>'Update successful']);
    }
    public function getCapNhatTTPTTT(ThongTinPTTTRequest $request)
    {
        $id=Auth::user()->id;
        $nd=User::find($id);
        $nd->card_type=$request->card_type;
        $nd->card_number=$request->card_number;
        $nd->card_SC=$request->card_SC;
        $nd->card_month=$request->card_month;
        $nd->card_year=$request->card_year;
        $nd->save();
        return back()->withInput()->with(['thongbao_CNPTTT'=>'Update successful']);
    }
    //quan tri
    public function getDanhSachNguoiDung()
    {
        $nguoidung=User::all();
        return view('nguoidung.danhsach',compact('nguoidung'));
    }
    public function getKhoaTaiKhoan($id)
    {
        $nd=User::find($id);
        if($nd->permission==1)
            return back()->withInput()->with(['thongbao_loi_knd'=>'Không thể khóa tài khoản <strong>Admin</strong>']);
        else
        {
            $trangthai=($nd->status == 1) ? "mở khóa tài khoản <strong>".$nd->name."</strong>" : "khóa tài khoản <strong>".$nd->name."</strong>";
            $nd->status=1-$nd->status;
            $nd->save();
            return back()->withInput()->with(['thongbao_loi_knd'=>'Đã '.$trangthai]);
        }
    }
    public function getXoaTaiKhoan($id)
    {
        $nd=User::find($id);
        if($nd->permission==1)
        {
            return back()->withInput()->with(['thongbao_xoa_nd'=>'Không thể xóa tài khoản <strong>Admin</strong>']);
        }
        else
        {
            $name= User::find($id)->name;
            User::find($id)->delete();
            return back()->withInput()->with(['thongbao_xoa_nd'=>'Đã xóa tài khoản '.$name]);
        }
    }
    public function getTimTaiKhoan(Request $rq)
    {
        $TuKhoa=$rq->TuKhoa;
        $TuKhoa=str_replace(' ', '%', $TuKhoa);
        $nguoidung=User::where('name','like','%'.$TuKhoa.'%')->get();
        $soluong=User::count();
        return view('nguoidung.danhsach',compact('nguoidung'));
    }
    public function getChiTietTaiKhoan($id)
    {
        $nguoidung=User::find($id);
        return view('nguoidung.chitiet',compact('nguoidung'));
    }
    public function getCapNhatAdmin()
    {
        $id=Auth::user()->id;
        $nguoidung=User::find($id);
        return view('nguoidung.sua',compact('nguoidung'));
    }
    public function postCapNhatAdmin(CapnhatAdminRequest $rq)
    {
        $id=Auth::user()->id;
        $nguoidung=User::find($id);
        if($rq->password!=$rq->password_confirm)
        {
            return back()->withInput()->with(['xacnhan_matkhau'=>'Xác nhận mật khẩu không chính xác']);
        }
        elseif($rq->password=="" && $rq->password_confirm=="")
        {
            $nguoidung->name=$rq->name;
            $nguoidung->email=$rq->email;
            $nguoidung->phone=$rq->phone;
            $nguoidung->save();
            return back()->withInput()->with(['capnhat_thanhcong'=>'Cập nhật thành công']);
        }
        else
        {
            $nguoidung->name=$rq->name;
            $nguoidung->email=$rq->email;
            $nguoidung->phone=$rq->phone;
            $nguoidung->password=Hash::make($rq->password);
            $nguoidung->save();
            return back()->withInput()->with(['capnhat_thanhcong'=>'Cập nhật thành công']);
        }
    }
}
