@extends('layout.app') 

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Data Petugas</h3>
                      <h3><a class="btn btn-success" href="{{url('petugas/create')}}" style="float: right;">Tambah</a></h3>
                    </div>
                    <br>
                    <div class="col-12" >
                      
                      </div>
                  
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">username</th>
                                    <th scope="col">password</th>
                                    <th scope="col">Nama Petugas</th>
                                    <th scope="col">Level</th>
                                    <th scop="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=1;
                                    foreach($petugas as $data){
                                ?>
                                    <tr>
                                        <td>{{ $i++}}</td>
                                        <td>{{ $data['username']}}</td>
                                        <td>{{ $data['password']}}</td>
                                        <td>{{ $data['nama_petugas']}}</td>
                                        <td>{{ $data['id_level']}}</td>
                                        <td>
                                        <a class="btn btn-warning btn-lg-sn" href="{{route('petugas.edit', $data['kd_petugas'])}}">Edit</a>
                                        <a class="btn btn-danger btn-lg-sn" href="{{route('petugas.destroy', $data['kd_petugas'])}}">Delete</a>
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




































