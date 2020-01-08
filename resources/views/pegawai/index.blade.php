@extends('layout.app') 

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pegawai</h1>
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
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
            Data Berhasil Disimpan
            </div>
        @endif
        @if(session('ubah'))
            <div class="alert alert-success" role="alert">
            Data Berhasil Diubah
            </div>
        @endif
        @if(session('hapus'))
            <div class="alert alert-success" role="alert">
            Data Berhasil Dihapus
            </div>
        @endif
              
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Data Pegawai</h3>
                      <h3><a class="btn btn-success" href="{{url('pegawai/create')}}" style="float: right;">Create New</a></h3>
                    </div>
                  
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-hover">
                       <thead class="thead-dark bordered">
                        <tr>
                          <th scope="col">No</th>
                              <th scope="col">Nama Pegawai</th>
                              <th scope="col" >NIP</th>
                              <th scope="col">Alamat</th>
                              <th scope="col" colspan="">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                              $i=1;
                              foreach($pegawai as $data){
                            ?>
                              <tr>
                                <td>{{ $i++}}</td>
                                <td>{{ $data['nama_pegawai']}}</td>
                                <td>{{ $data['nip']}}</td>
                                <td>{{ $data['alamat']}}</td>
                                <td>
                                  <a class="btn btn-warning btn-lg-sn" href="{{route('pegawai.edit', $data['id_pegawai'])}}">Edit</a>
                                  <a class="btn btn-warning btn-lg-sn" href="{{route('pegawai.destroy', $data['id_pegawai'])}}">hapus</a>
                                </td>
                              </tr>            
                            <?php }?>      
                        </tbody>
                        
                      </table>
                  </div>
              </div>
            </div>
              
            
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script>
    $("#example1").DataTable();
</script>
@endsection
