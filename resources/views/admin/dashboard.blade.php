@extends('master')
@section('content')
<div class="card">

    <div class="card-header">
        Inib Judul
    </div>

    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="text" name="nama_karyawan" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <input type="text" name="agama" class="form-control" required>
            </div>
            <div  class="float-right">
                <input type="submit" class="btn btn-primary">
            </div>

        </form>
    </div>
</div>
@endsection

@section('judul-page')
    Tambah Karyawan

@endsection


