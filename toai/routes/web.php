<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('getUser');
Route::get('gio-hang',['as'=>'getGioHang', 'uses'=>'GioHangController@getGioHang']);

Route::group(['prefix'=>'nguoidung'],function(){
	Route::get('get-dang-nhap-dang-ky',['as'=>'getDangNhapDangKy', 'uses'=>'NguoiDungController@getDangNhapDangKy']);

	Route::post('post-dang-ky-thanh-vien',['as'=>'postDangKy', 'uses'=>'NguoiDungController@postDangKy']);

	Route::post('post-dang-nhap',['as'=>'postDangNhap','uses'=>'NguoiDungController@postDangNhap']);

	Route::get('trang-quan-tri-vien',['as'=>'getAdmin','uses'=>'NguoiDungController@getAdmin']);

	Route::get('dang-xuat',['as'=>'getDangXuat','uses'=>'NguoiDungController@getDangXuat']);

	Route::get('get-tai-khoan-ca-nhan',['as'=>'getTaiKhoan','uses'=>'NguoiDungController@getTaiKhoan']);

	Route::get('cap-nhat-thong-tin-ca-nhan',['as'=>'getCapNhatTTCN','uses'=>'NguoiDungController@getCapNhatTTCN']);

	Route::get('cap-nhat-thong-tin-dia-chi-giao-hang',['as'=>'getCapNhatTTDCGH','uses'=>'NguoiDungController@getCapNhatTTDCGH']);

	Route::get('cap-nhat-thong-tin-lich-su-mua-hang',['as'=>'getCapNhatTTLSMH','uses'=>'NguoiDungController@getCapNhatTTLSMH']);

	Route::get('cap-nhat-thong-tin-phuong-thuc-thanh-toan',['as'=>'getCapNhatTTPTTT','uses'=>'NguoiDungController@getCapNhatTTPTTT']);

	Route::get('danh-sach-thanh-vien',['as'=>'getDanhSachNguoiDung','uses'=>'NguoiDungController@getDanhSachNguoiDung']);

	Route::get('khoa-tai-khoan/{id}',['as'=>'getKhoaTaiKhoan','uses'=>'NguoiDungController@getKhoaTaiKhoan']);

	Route::get('xoa-tai-khoan/{id}',['as'=>'getXoaTaiKhoan','uses'=>'NguoiDungController@getXoaTaiKhoan']);

	Route::get('tim-kiem-tai-khoan',['as'=>'getTimTaiKhoan','uses'=>'NguoiDungController@getTimTaiKhoan']);

	Route::get('chi-tiet-tai-khoan/{id}',['as'=>'getChiTietTaiKhoan','uses'=>'NguoiDungController@getChiTietTaiKhoan']);

	Route::get('get-cap-nhat-tai-khoan-admin',['as'=>'getCapNhatAdmin','uses'=>'NguoiDungController@getCapNhatAdmin']);

	Route::post('post-cap-nhat-tai-khoan-admin',['as'=>'postCapNhatAdmin','uses'=>'NguoiDungController@postCapNhatAdmin']);
});
Route::resource('loai-san-pham','LoaispController');
Route::get('loai-san-pham-tim-kiem',['as'=>'getTimLoaiSP','uses'=>'LoaispController@getTimLoaiSP']);

Route::resource('hang-san-xuat','HangsxController');
Route::get('hang-san-xuat-tim-kiem',['as'=>'getTimHangSX','uses'=>'HangsxController@getTimHangSX']);

Route::resource('he-dieu-hanh','HedieuhanhController');
Route::get('he-dieu-hanh-tim-kiem',['as'=>'getTimHDH','uses'=>'HedieuhanhController@getTimHDH']);

Route::resource('san-pham','SanphamController');
Route::get('san-pham-tim-kiem',['as'=>'getTimSanPham','uses'=>'SanphamController@getTimSanPham']);
