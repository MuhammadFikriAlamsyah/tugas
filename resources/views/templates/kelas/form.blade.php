@extends('templates.header')

@section('content')
    <!-- Content Header (Page header)-->
    <section class="content-header">
        <h1>
            {{ empty($result) ? 'Tambah' : 'Edit' }} Data Kelas
            <small>SMK Negeri 1 Cianjur</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Data Kelas</li>
            <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Data Kelas</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @include('templates.feedback')

        <!-- Default Box -->
        <div class="box">
            <div class="box-header with-border">
                <a href="{{ url('/') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i> Kembali</a>
                <!-- Tambahkan tombol delete -->
                @if (!empty($result))
                    <form action="{{ url("kelas/{$result->id_kelas}/delete") }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?');"><i class="fa fa-trash"></i> Hapus</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="box-body">
            <form action="{{ empty($result) ? url('kelas/add') : url("kelas/{$result->id_kelas}/edit") }}" class="form-horizontal" method="POST">
                @csrf

                @if (!empty($result))
                    @method('PATCH')
                @endif
                <div class="form-group">
                    <label class="control-label col-sm-2">Nama Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_kelas" class="form-control" placeholder="Masukkan Nama Kelas" value="{{ $result->nama_kelas ?? '' }}" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Jurusan"
                               value="{{ $result->jurusan ?? '' }}" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection