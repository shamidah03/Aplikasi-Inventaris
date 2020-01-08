<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    /*merangkum apa yang akan kita ambil */
    protected $table = 'tb_pegawai';
    protected $primaryKey = 'id_pegawai';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pegawai', 'nama_pegawai', 'nip', 'alamat',
    ];

    public function getAll(){
        return $this->select('*')->get();
    }

    public function getById($id){
        return $this->select('*')
                ->where('id_pegawai', $id)
                ->get();
    }
  
}
