<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman2 extends Model
{
    use HasFactory;
    public $fillable =['tanggal', 'nama', 'fakultas', 'jurusan', 'tujuan', 'waktu_mulai', 'waktu_selesai'];

    public $timestamps = true;
}
