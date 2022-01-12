<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\Pegawai;
use Illuminate\Http\Request;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pegawai.index', [
            'pegawais' => Pegawai::latest()->with(['pangkat', 'jabatan'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pegawai.create', [
            'pangkats' => Pangkat::get()->all(),
            'jabatans' => Jabatan::get()->all()
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
            'pangkat_id' => 'required',
            'jabatan_id' => 'required',
            'nama' => 'required',
            'nip' => 'required'
        ]);

        Pegawai::create($validate);
        return redirect('/pegawai')->with('success', 'Sukses Menambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        return view('admin.pegawai.show', [
            'pegawai' => Pegawai::find($pegawai)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('admin.pegawai.edit', [
            'pegawais' => Pegawai::find($pegawai),
            'pangkats' => Pangkat::get()->all(),
            'jabatans' => Jabatan::get()->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $rules = [
            'pangkat_id' => 'required',
            'jabatan_id' => 'required',
            'nama' => 'required',
            'nip' => 'required'
        ];

        $validate = $request->validate($rules);
        Pegawai::where('id', $pegawai->id)->update($validate);
        return redirect('/pegawai')->with('success', 'Sukses TerUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        Pegawai::destroy($pegawai->id);

        return redirect('/pegawai')->with('success', 'Sukses Terhapus!');
    }
}