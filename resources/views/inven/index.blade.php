@extends('layout.app') 

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Inventaris</h1>
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
                      <h3 class="card-title">Data Inven</h3>
                      <h3><a class="btn btn-success" href="{{url('inven\create')}}" style="float: right;">Tambah</a></h3>
                    </div>
                    <br>
                    <div class="col-12" >
                      
                      </div>
                  
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Id Inventaris</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kondisi</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Tanggal Register</th>
                                    <th scope="col">ruang</th>
                                    <th scope="col">kode inventaris</th>
                                    <th scop="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=1;
                                    foreach($inven as $data){
                                ?>
                                <tr>
                                        <td>{{ $i++}}</td>
                                        <td>{{ $data['nama']}}</td>
                                        <td>{{ $data['kondisi']}}</td>
                                        <td>{{ $data['keterangan']}}</td>
                                        <td>{{ $data['jumlah']}}</td>
                                        <td>{{ $data['nama_jenis']}}</td>
                                        <td>{{ $data['tanggal_register']}}</td>
                                        <td>{{ $data['nama_ruang']}}</td>
                                        <td>{{ $data['kode_inventaris']}}</td>
                                        <td>
                                          <a class="btn btn-warning btn-lg-sn" href="{{url('inven/edit')}}">Edit</a>
                                          <a class="btn btn-warning btn-lg-sn" href="{{url('inven/hapus')}}">Hapus</a>
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




































