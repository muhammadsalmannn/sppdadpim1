<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\Pegawai;
use App\Models\Perjalanan;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.surat_perintah.index', [
            'surats' => Surat::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.surat_perintah.create', [
            'pegawais' => Pegawai::get()->all(),
            'perjalanans' => Perjalanan::get()->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'pegawai_id' => 'required',
            'perjalanan_id' => 'required',
            'nomor' => 'required|max:255',
            'uraian' => 'required|max:255'
        ]);

        $validate['user_id'] = auth()->user()->id;

        Surat::create($validate);
        return redirect('/surat')->with('success', 'Sukses Menambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        return view('admin.surat_perintah.show', [
            'surats' => Surat::find($surat)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit(Surat $surat)
    {
        return view('admin.surat_perintah.edit', [
            'surats' => Surat::find($surat),
            'pegawais' => Pegawai::get(),
            'perjalanans' => Perjalanan::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $surat)
    {
        $rules = [
            'nomor' => 'required',
            'uraian' => 'required'
        ];

        if ($surat->pegawai != $request->pegawai) {
            $rules['pegawai_id'] = 'required';
        }

        if ($surat->perjalanan != $request->perjalanan) {
            $rules['perjalanan_id'] = 'required';
        }

        $validate['user_id'] = auth()->user()->id;
        $validate = $request->validate($rules);

        Surat::where('id', $surat->id)->update($validate);
        return redirect('/surat')->with('success', 'Sukses TerUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        Surat::destroy($surat->id);

        return redirect('/surat')->with('success', 'Sukses Terhapus!');
    }

    public function cetakSurat()
    {
        return view('admin.surat_perintah.cetak', [
            'surats' => Surat::with(['pegawai', 'perjalanan'])->get(),
            'pangkats' => Pangkat::get(),
            'jabatans' => Jabatan::get()
        ]);
    }
}