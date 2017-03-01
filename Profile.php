<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $primaryKey = 'idProfil';

    protected $fillable = array("idUser","fotoProfile","fotoKTP","nikKTP","tempatLahir","tanggalLahir","alamat","kontak","biografi","jenisKelamin","hobi","follower","following","jumlahPosting","status");

    protected $hidden = [
        'updated_at','deleted_at',
    ];

    public function user(){
		return $this->belongsTo('App\User', 'idUser');
	}   

	public function reviewMasjid(){
        return $this->hasMany('App\Models\reviewMasjid','idProfil','idProfil');
    }

    public function point(){
        return $this->hasMany('App\Models\point','idProfil','idProfil');
    }

    public function reportMasjid(){
        return $this->hasMany('App\Models\reportMasjid','idProfil','idProfil');
    }

    

     
}
