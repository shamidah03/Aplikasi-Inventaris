@extends('layout.app') 

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data Inventasis</h1>
        </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('inven')}}">Transaksi</a></li>
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
                  <h3 class="card-title">Data Inventaris</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form role="form" action="{{ url('inven/store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">Nama</label>
                          <input name="nama" type="text" class="form-control" id="nama" aria-describedby="nama">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">Kondisi</label>
                          <input name="kondisi" type="text" class="form-control" id="kondisi" aria-describedby="kondisi">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">Keterangan</label>
                          <input name="keterangan" type="text" class="form-control" id="keterangan" aria-describedby="keterangan" >
                      </div>
                      <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">Jumlah</label>
                          <input name="jumlah" type="text" class="form-control" id="jumlah" aria-describedby="jumlah" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Jenis</label>
                        <select name="id_jenis"type="text" id="id_jenis" class="form-control" aria-describedby="Jenis">
                          <option value="" disabled selected>Jenis</option>
                          @foreach($jenis as $row)
                            <option value="{{$row['id_jenis']}}">{{ $row['nama_jenis']}}</option>
                          @endforeach
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">Tanggal Register</label>
                          <input name="tanggal_register" type="date" class="form-control" id="tanggal_register" aria-describedby="tanggal sewa" >
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputState">Ruang</label>
                        <select name="id_ruang"type="text" id="id_ruang" class="form-control" aria-describedby="Ruang">
                          <option>Ruang</option>
                          @foreach($ruang as $row)
                            <option value="{{$row['id_ruang']}}">{{ $row['nama_ruang']}}</option>
                          @endforeach
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">kode_inventaris</label>
                          <input name="kode_inventaris" type="text" class="form-control" id="kode_inventaris" aria-describedby="tanggal sewa" >
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


                    
                      




























