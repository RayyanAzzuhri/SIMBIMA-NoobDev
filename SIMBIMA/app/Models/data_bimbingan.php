<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_bimbingan extends Model
{
    protected $table = 'data_bimbingan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'NIM', 'dosen_pembimbing_1', 'dosen_pembimbing_2', 'dosen_penguji'];
    use HasFactory;
}
