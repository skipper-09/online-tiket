<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeKonser extends Model
{
    use HasFactory;
    protected $table = 'kode_konsers';
    protected $fillable = ['id_pemesan', 'kode'];
    protected $primaryKey = 'id';
}
