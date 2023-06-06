<?php

namespace App\Http\Controllers\FrontEnd\Pemesanan;

use App\Http\Controllers\Controller;
use App\Models\KodeKonser;
use App\Models\Konser;
use App\Models\Pemesan;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PemesananController extends Controller
{
    public function index()
    {
        $data = [
            'konser' => Konser::all(),
        ];
        return view('Front-end.page.pemesan.index', $data);
    }

    public function tambah(Request $request)
    {
        $pemesan = Pemesan::create([
            'konser_id' => $request->id_konser,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telepon' => $request->nohp,
            'alamat' => $request->alamat,
        ]);

        KodeKonser::create([
            'id_pemesan' => $pemesan->id,
            'kode' => Str::random(30),
        ]);

        return redirect()->route('kode_pesanan');
    }

    public function kode()
    {
        $data = [
            'kode' => KodeKonser::latest()->first()
        ];
        return view('Front-end.page.pemesan.kode', $data);
    }
}
