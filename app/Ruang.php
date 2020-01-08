<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    //
    protected $table='tb_ruang';
    protected $primarykey='id_ruang';

    protected $fillable =[
        'id_ruang','nama_ruang','kode_ruang','keterangan',
    ];

    public function getAll(){
        return $this->select('*')->get();
    }

}
