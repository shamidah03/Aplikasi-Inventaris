@extends('layout.app') 

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data Petugas</h1>
        </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('petugas')}}">Petugas</a></li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        @if(session('sukses'))
          <div class="alert alert-success" role="alert">
            Data Berhasil Diubah
          </div>
        @endif    
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Petugas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form role="form" action="{{ url('petugas/store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-row">
                     <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">username</label>
                          <input name="username" type="text" class="form-control" id="username" aria-describedby="tanggal sewa" >
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">password</label>
                          <input name="password" type="password" class="form-control" id="password" aria-describedby="password" >
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">nama Petugas</label>
                          <input name="nama_petugas" type="text" class="form-control" id="nama_petugas" aria-describedby="tanggal sewa" >
                        </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Level</label>
                        <select name="id_level"type="text" id="id_level" class="form-control" aria-describedby="id_level">
                          <option value="" disabled selected>Level</option>
                          @foreach($level as $row)
                            <option value="{{$row['id_level']}}">{{ $row['nama_level']}}</option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" id="searchHarga" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
                  </div>   
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection


                    
                      




























