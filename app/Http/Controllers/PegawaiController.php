<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{

        private $pegawai;
        public function __construct(Pegawai $pegawai)
        {
            $this->pegawai = $pegawai;
        
        }
        public function index(){
        $pegawai = $this->pegawai->getAll();
        return view('pegawai.index', ['pegawai' => $pegawai]);
        }

        public function create(){
            return view('pegawai.create');
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
                'nama_pegawai' => 'required|max:255',
                'nip' => 'required',
                'alamat' => 'required',
            ]);
    
            $data =  new Pegawai();
            $data->nama_pegawai = $request->nama_pegawai;
            $data->nip = $request->nip;
            $data->alamat =$request->alamat;
            $data->save();
            return redirect('pegawai')->with('sukses', 'Berhasil ditambahkan');
        }

    public function edit(Request $request, $id){
        $pegawai = $this->pegawai->getById($id);
        $pegawai = $pegawai[0];
        return view('pegawai.edit', ['pegawai' => $pegawai]);
      }

      
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pegawai = $request->validate([
            'nama_pegawai' => 'required|max:255',
            'nip' => 'required',
            'alamat' => 'required',
            ]);
        Pegawai::where('id_pegawai', $id)->update($pegawai);
    

        return redirect('/pegawai')->with('ubah', 'Data Berhasil Diubah');

    }

    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        
        return redirect('/pegawai');
    }
}