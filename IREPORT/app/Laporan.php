<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    // protected $fillable = ['kategori', 'tanggal', 'alamat', 'foto', 'keterangan'];
    protected $guarded = [];
}
