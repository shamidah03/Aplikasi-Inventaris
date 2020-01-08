@extends('layout.app') 

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah Data pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('pegawai')}}">Pegawai</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

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
          @if(session('ubah'))
              <div class="alert alert-success" role="alert">
                Data Berhasil Diubah
              </div>
          @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Data Pegawai</h3>
                    </div>
                    <br>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('pegawai.update', $pegawai['id_pegawai'])}}" method="post">
                          {{csrf_field()}}
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="exampleInputEmail1">Nama Pegawai</label>
                              <input name="nama_pegawai"type="text" class="form-control" id="exampleInputEmail1" 
                              aria-describedby="Nama_pegawai" value="{{ $pegawai->nama_pegawai}}">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="exampleInputEmail1">NIP</label>
                              <textarea name="nip" class="form-control" id="exampleInputEmail1" rows="3" placeholder="Enter ..." >{{ $pegawai->nip}}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="exampleInputEmail1">Alamat</label>
                              <textarea name="alamat" class="form-control" id="exampleInputEmail1" rows="3" placeholder="Enter ..." >{{ $pegawai->alamat}}</textarea>
                            </div>
                          </div>
                            <button type="submit" class="btn btn-primary">Submit</button> 
                        </form>
          </div>   
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection




