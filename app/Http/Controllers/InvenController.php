<?php

namespace App\Http\Controllers;
use App\Inven;
use App\Jenis;
use App\Ruang;
use Illuminate\Http\Request;
use App\Http\controllers\controller;

class InvenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $inven;
    public function __construct(Inven $inven)
    {
        $this->inven = $inven;
        
    }
    
public function index(){
    // $transaksi = \app\Transaksi::All();
    $inven=$this->inven->getJoinJenis();

    return view('inven.index',compact('inven'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::All();
        $ruang=Ruang::All();
        return view('inven.create', ['jenis' => $jenis],['ruang'=>$ruang]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'nama'=>'required',
                'kondisi'=> 'required',
                'keterangan'=> 'required',
                'jumlah'=> 'required',
                'id_jenis',
                'tanggal_register'=> 'required',
                'id_ruang'=> 'required',
                'kode_inventaris'=> 'required',
            ]);
            $data =  new Inven();
            $data->nama=$request->nama;
            $data->kondisi= $request->kondisi;
            $data->keterangan= $request->keterangan;
            $data->jumlah= $request->jumlah;
            $data->id_jenis= $request->id_jenis;
            $data->tanggal_register= $request->tanggal_register;
            $data->id_ruang= $request->id_ruang;
            $data->kode_inventaris= $request->kode_inventaris;
            $data->save();
            return redirect('inven')->with('sukses', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $inven = inven::find($id);
        $inven->delete();
        
        return redirect('/inven');
    }
}
