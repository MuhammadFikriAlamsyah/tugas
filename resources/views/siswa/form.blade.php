@extends('templates.header')

@section('content')
<!--Content Header (Page header)-->
    <section class="content-header">
        <h1>
            {{ empty($result) ? 'Tambah' : 'Edit' }} Data Siswa
            <small>SMK Negeri 1 Cianjur</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('siswa') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li>Data Siswa</li>
            <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Data Siswa</li>
        </ol>
    </section>

    <!--Main content -->
    <section class="content">
        @include('templates/feedback')

        <!--Default box -->
        <div class="box">
            <div class="box-header with-border">
                <a href="{{ url('siswa') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i>Kembali</a>
            </div>
            <div class="box-body">
                <form action="{{ empty($result) ? url('siswa/add') : url("siswa/$result->nis/edit") }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}

                    @if (!empty($result))
                        {{ method_field('patch') }}
                    @endif

                <div class="form-group">
                    <label class="control-label col-sm-2">NIS</label>
                    <div class="col-sm-10">
                        <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS" value="{{ @$result->nis }} " />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label-col-sm-2">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{ @$result->nama_lengkap }}" />
                    </div>
                </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label><input type="radio" name="jenis_kelamin" value="L" {{ (@$result->jenis_kelamin == 'L' ? 'checked' : '') }} /> L</label>
                                <label><input type="radio" name="jenis_kelamin" value="P" {{ (@$result->jenis_kelamin == 'P' ? 'checked' : '') }} /> P</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap">{!! @$result->alamat !!}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telp" value="{{ @$result->no_telp }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="contol-label col-sm-2">Kelas</label>
                        <div class="col-sm-10">
                            <select name="id_kelas" class="form-control">
                                @foreach (\App\Models\Kelas::all() as $kelas)
                                <option value="{{ $kelas->id_kelas }}" {{ @$result->id_kelas == $kelas->id_kelas ? 'selected' : ''}}>{{ $kelas->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box-body -->

    </section>
    <!-- /.content -->
@endsection