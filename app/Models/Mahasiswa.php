<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nama','ipk_sebelumnya','sks_sudah_kontrak','ips_saat_ini','sks_sedang_kontrak'
    ];


    protected $hidden = [
        
    ];
}
