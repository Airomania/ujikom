<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    public $fillable =['tanggal', 'nama', 'nim', 'tujuan', 'no_hp', 'waktu', 'no_pc'];

    public $timestamps = true;
}
