<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function SaveKaryawan (Request $request){
        Staff::create([
            'nama_karyawan'=>$request->input('nama_karyawan'),
            'jenis_kelamin'=>$request-> input('jenis_kelamin'),
            'agama'=>$request-> input('agama'),
            'alamat'=>$request-> input('alamat'),
        ]);
        return redirect('list-karyawan')->withSuccess('Data Berhasil Disimpan');

    }
}
