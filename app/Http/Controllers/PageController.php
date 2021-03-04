<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Index(){
        return view ('admin.dashboard');
    }

    public function ListStaff (){
        $staff = Staff::all();

        return view ('admin.daftar-karyawan', compact('staff'));
    }
    public function delete ($id){
        Staff::whereId($id)->delete();
        return back()->withSuccess('data berhasil dihapus');
    }

    public function edit($id){
        $data ['staff'] = Staff::whereId($id)->first();
        return view('admin.edit-karyawan', $data );
    }

    public function update(Request $request, $id){
        Staff::whereId($id)->update($request->all());
        return redirect('list-karyawan')->withSuccess('Data  Berhasil Diubah');
    }

}
