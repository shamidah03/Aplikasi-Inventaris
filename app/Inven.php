<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inven extends Model
{
    //
    protected $table='tb_inven';
    protected $primarykey='id_inven';

    protected $fillable =[
        'id_inven','nama','kondisi','keterangan','jumlah','id_jenis','tanggal_register','id_ruang','kode_inventaris',

    ];

    public function getAll(){
        return $this->select('*')->get();
    }

    public function getJoinJenis(){
        return $this->select('*')
        ->join('tb_jenis','tb_inven.id_jenis','=','tb_jenis.id_jenis')
        ->join('tb_ruang','tb_inven.id_ruang','=','tb_ruang.id_ruang')
        ->get();
    }
}
