<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    // protected $fillable = [
    //     'judul_berita', 
    //     'deskripsi',  
    //     'foto', 
    //     'user_id'=>0
    //     ];
    protected $guarded = [];
    public $timestamps = false;
}
