<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    protected $table = 'tb_level';
    protected $primaryKey = 'id_level';
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_level', 'nama_level',
    ];

    public function getAll(){
        return $this->select('*')->get();
    }

    public function getById($id){
        return $this->select('*')
                ->where('id_level', $id)
                ->get();
    }
}


  