<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeKonser extends Model
{
    use HasFactory;
    protected $table = 'kode_konsers';
    protected $fillable = ['id_pemesan', 'kode', 'digunakan'];
    protected $primaryKey = 'id';

    public function pemesan()
    {
        return $this->hasOne(pemesan::class, 'id', 'id_pemesan');
    }
}
