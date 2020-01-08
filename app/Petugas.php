<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    //
    protected $table = 'tb_petugas';
    protected $primaryKey = 'kd_petugas';
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kd_petugas', 'username', 'password','nama_petugas','id_level',
    ];

    public function getAll(){
        return $this->select('*')->get();
    }

    public function getJoinPelanggan(){
        return $this->select('*')
        ->join('tb_level','tb_petugas.id_level','=','tb_level.id_level')
        ->get();
    }
}


  