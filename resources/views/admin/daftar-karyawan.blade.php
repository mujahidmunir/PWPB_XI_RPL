@extends('master')
@section('content')
    <button class="btn btn-primary m-1 btn-sm" data-toggle="modal" data-target="#largesizemodal">Tambah Data</button>
    <table id="default-datatable" class="table table-bordered">
        <thead>
        <tr>
            <td>No</td>
            <td>Nama Karyawan</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>AlamatS</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($staff as $key => $data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->nama_karyawan}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->agama}}</td>
            <td>{{$data->alamat}}</td>
            <td class="text-center ">
                <button class="btn btn-primary m-1 btn-sm" data-toggle="modal" data-target="#edit{{$data->id}}"><i class="fa fa-pencil" style="font-size: 12px"></i></button>
                <a href="{{URL::to('/delete', $data->id)}}" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" style="font-size: 12px;"></i></a>
            </td>

        </tr>

        <div class="modal fade" id="edit{{$data->id}}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><i class="fa fa-star"></i> Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">

                            <div class="card-header">
                                Inib Judul
                            </div>

                            <div class="card-body">
                                <form action="{{URL::to('edit/'.$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Karyawan</label>
                                        <input type="text" name="nama_karyawan" value="<?php  echo $data->nama_karyawan; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" value="{{$data->jenis_kelamin}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" value="{{$data->alamat}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <input type="text" name="agama" value="{{$data->agama}}" class="form-control" required>
                                    </div>
                                    <div  class="float-right">
                                        <input type="submit" class="btn btn-primary">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @endforeach
        </tbody>
    </table>

@endsection

<!-- Modal -->
<div class="modal fade" id="largesizemodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-star"></i> Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">

                    <div class="card-header">
                        Inib Judul
                    </div>

                    <div class="card-body">
                        <form action="{{URL::to('tambah-karyawan')}}" method="post" enctype="multipart/form-data">
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
            </div>

        </div>
    </div>
</div>
