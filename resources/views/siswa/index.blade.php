@extends('templates.header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Data Siswa
        <small>SMK Negeri 1 Cianjur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates.feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('siswa/add') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
        </div>
        <div class="box-body">
          <table class="table table-stripped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No telp</th>
                <th>Kelas</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($result as $row)
              <tr>
                <td>{{ !empty($i) ? ++$i : $i =1}}</td>
                <td>{{ @$row->nama_kelas }}</td>
                <td>{{ @$row->jenis_kelamin_display }}</td>
                <td>{{ @$row->alamat }}</td>
                <td>{{ @$row->no_telp }}</td>
                <td>{{ @$row->kelas->nama_kelas }}</td>
                <td>
                  <a href="{{ url("siswa/$row->nis/edit") }}" class="btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <form action="{{ url("siswa/$row->nis/delete") }}" method="POST" style="display:inline;">
                  {{ csrf_field()}}
                  {{ method_field('DELETE') }}
                  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!--/.box body -->
      </div>
      <!--/.box body -->

    </section>
    <!--/.content -->
    @endsection
