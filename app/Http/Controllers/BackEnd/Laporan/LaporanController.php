<?php

namespace App\Http\Controllers\BAckEnd\Laporan;

use App\Http\Controllers\Controller;
use App\Models\KodeKonser;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $data = [
            'laporan' => KodeKonser::with('pemesan')->get()
        ];

        return view('Back-end.pages.laporan.index', $data);
    }
}
