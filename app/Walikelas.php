<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
    protected $table = 'walikelas';
    protected $fillable = [
        'id_guru',
        'id_kelas'
    ];

    public function Guru()
    {
        return $this->belongsTo('App\Guru', 'id_guru');
    }

    public function Kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }
}
