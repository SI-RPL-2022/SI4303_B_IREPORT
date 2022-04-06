<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 
        'alamat', 
        'tempatLahir', 
        'tanggalLahir', 
        'foto',
        'user_id', 
        'point'];
}
