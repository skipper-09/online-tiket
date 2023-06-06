<?php

namespace App\Http\Controllers\BackEnd\Pemesan;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use App\Models\pemesan;
use Illuminate\Http\Request;

class PemesanController extends Controller
{
    public function index()
    {
        $data = [
            'pemesan' => pemesan::all()
        ];
        return view('Back-end.pages.pemesan.index', $data);
    }

    public function edit($id)
    {
        $data = [
            'konser' => Konser::all(),
            'pemesan' => pemesan::find($id)
        ];
        return view('Back-end.pages.pemesan.edit', $data);
    }

    public function update($id, Request $request)
    {
        $pemesan = pemesan::find($id);
        $pemesan->konser_id = $request->id_konser;
        $pemesan->nama = $request->nama;
        $pemesan->email = $request->email;
        $pemesan->no_telepon = $request->nohp;
        $pemesan->alamat = $request->alamat;

        $pemesan->save();
        return redirect()->route('admin.pemesan');
    }

    public function delete($id)
    {
        pemesan::find($id)->delete();
        return redirect()->back();
    }
}
