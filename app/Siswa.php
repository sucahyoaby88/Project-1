<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'nisn',
        'nama_siswa',
        'id_kelas',
        'tanggal_lahir',
        'jenis_kelamin',
        'avatar'
    ];

    public function getAvatar()
    {
            if(!$this->avatar){
                return asset('images/default.jpg');
            }
            return asset('images/'.$this->avatar);
    }

    public function Kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }
}
