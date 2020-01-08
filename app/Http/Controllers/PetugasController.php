<?php

namespace App\Http\Controllers;

use App\Petugas;
use App\level;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetugasController extends Controller
{

    private $petugas;
        public function __construct(Petugas $petugas)
        {
            $this->petugas = $petugas;
            
        }
        
    public function index(){
        // $transaksi = \app\Transaksi::All();
        $petugas=$this->petugas->getJoinPelanggan();

        return view('petugas.index',compact('petugas'));
        }


    public function create(){
        $level = Level::All();
        return view('petugas.create', ['level' => $level]);
        }
        /**
         * Create a new flight instance.
         *
         * @param  Request  $request
         * @return Response
         */  
    public function store(Request $request)
        {
            $this->validate($request, [
                'username'=>'required',
                'password'=>'required',
                'nama_petugas'=> 'required',
                'id_level'=> 'required',
            ]);
            $data =  new Petugas();
            $data->username=$request->username;
            $data->password= bcrypt($request->password);
            $data->nama_petugas= $request->nama_petugas;
            $data->id_level= $request->id_level;
            $data->save();
            return redirect('petugas')->with('sukses', 'Berhasil ditambahkan');
        }
        public function edit(){
            $level = Level::All();
            $petugas=$this->petugas->getJoinPelanggan();
            $petugas = $petugas[0];
            return view('petugas.edit',['petugas' => $petugas,'level' => $level]);
        }
        public function update(Request $request,$id){
            $petugas = $request->validate([
                'username'=> 'required',
                'password',
                'nama_petugas'=> 'required',
                'id_level'=> 'required',
                ]);
            Petugas::where('kd_petugas', $id)->update($petugas);
            return redirect('/petugas')->with('ubah', 'Data Berhasil Diubah');
        }
}