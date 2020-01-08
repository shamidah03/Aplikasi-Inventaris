@extends('layout.app') 

@section('content')
<div class="container" style="width: 100%;">
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            Data Berhasil Disimpan
        </div>
    @endif
        <div class="row">
            <div class="col-6">
                <h1>Data Laporan</h1>
            </div>
            <div>
                <button class="btn btn-primary" onclick="myFunction()" id="button">Print</button>
            </div>
        </div>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id Transaksi</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Tarif Mobil</th>
                    <th scope="col">Tanggal Sewa</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Lama Sewa</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i=1;
                ?>
                    <tr>
                        <td>{{ $i++}}</td>
                        <td>{{ $transaksi['nama_pelanggan']}}</td>
                        <td>{{ $transaksi['nama_mobil']}}</td>
                        <td>{{ $transaksi['tarif_mobil']}}</td>
                        <td>{{ $transaksi['tanggal_sewa']}}</td>
                        <td>{{ $transaksi['tanggal_kembali']}}</td>
                        <td>{{ $transaksi['lama_sewa']}}</td>
                        <td>{{ $transaksi['total']}}</td>
                    </tr>
                <?php?>
            </tbody>            
        </table>
</div>
@endsection
<script>
    function myFunction(){
    var x = document.getElementById("button");
    if(x.style.display === "none"){
    x.style.display="block";
    }else{
    x.style.display="none";
    }
    window.print();
    x.style.display="block";
    x.style.float="right";
    x.style.marginBottom="10px";
    }
</script>