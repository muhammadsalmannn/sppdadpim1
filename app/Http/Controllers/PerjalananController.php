<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Kendaraan;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.perjalanan_dinas.index', [
            'perjalanans' => Perjalanan::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perjalanan_dinas.create', [
            'pegawais' => Pegawai::get()->all(),
            'kendaraans' => Kendaraan::get()
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
            'kendaraan_id' => 'required',
            'lama_perjalanan' => 'required|max:255',
            'tempat_berangkat' => 'required|max:255',
            'tempat_tujuan' => 'required|max:255',
            'tanggal_berangkat' => 'required',
            'tanggal_kembali' => 'required'
        ]);

        Perjalanan::create($validate);
        return redirect('/perjalanan')->with('success', 'Sukses Menambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function show(Perjalanan $perjalanan)
    {
        return view('admin.perjalanan_dinas.show', [
            'perjalanan' => Perjalanan::find($perjalanan)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perjalanan $perjalanan)
    {
        return view('admin.perjalanan_dinas.edit', [
            'perjalanans' => Perjalanan::find($perjalanan),
            'kendaraans' => Kendaraan::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perjalanan $perjalanan)
    {
        $rules = [
            'lama_perjalanan' => 'required|max:255',
            'tempat_berangkat' => 'required|max:255',
            'tempat_tujuan' => 'required|max:255',
            'tanggal_berangkat' => 'required',
            'tanggal_kembali' => 'required'
        ];

        if ($perjalanan->kendaraan != $request->kendaraan) {
            $rules['kendaraan_id'] = 'required';
        }

        $validate = $request->validate($rules);

        Perjalanan::where('id', $perjalanan->id)->update($validate);
        return redirect('/perjalanan')->with('success', 'Sukses TerUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perjalanan $perjalanan)
    {
        Perjalanan::destroy($perjalanan->id);

        return redirect('/perjalanan')->with('success', 'Sukses Terhapus!');
    }
}