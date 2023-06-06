<?php

namespace Database\Seeders;

use App\Models\Konser;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KonserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Konser::insert([
            'id' => 1,
            'nama_konser' => 'Alan Walker',
            'created_at' => Carbon::now(),
        ]);
    }
}
