<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'jurusan',
        'kelamin',
        'universitas',
        'tgl_mulai',
        'tgl_berakhir',
        'cv',
        'status',
    ];
}
