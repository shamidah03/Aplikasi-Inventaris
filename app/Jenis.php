<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    //
    protected $table='tb_jenis';
    protected $primarykey='id_jenis';

    protected $fillable =[
        'id_jenis','nama_jenis','kode_jenis','keterangan',

    ];

    public function getAll(){
        return $this->select('*')->get();
    }

}
