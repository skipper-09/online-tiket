<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesan extends Model
{
    use HasFactory;
    protected $table = 'pemesan';
    protected $fillable = ['konser_id', 'nama', 'email', 'no_telepon', 'alamat'];
    protected $primaryKey = 'id';
}
