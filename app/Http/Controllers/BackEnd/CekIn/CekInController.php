<?php

namespace App\Http\Controllers\BAckEnd\CekIn;

use App\Http\Controllers\Controller;
use App\Models\KodeKonser;
use Illuminate\Http\Request;

class CekInController extends Controller
{
    public function index()
    {
        return view('Back-end.pages.cek_in.index');
    }

    public function store(Request $request)
    {
        $kode = $request->kode;
        KodeKonser::where('kode', '=', $kode)->update(['digunakan' => true]);
        return redirect()->route('detail.cek-in', $kode)->with('Success', 'Kode Berhasil Digunakan');
    }

    public function detail($kode)
    {
        $data = [
            'detail' => KodeKonser::where('kode', $kode)->with('pemesan')->get()
        ];

        return view('Back-end.pages.cek_in.detail', $data);
    }
}
