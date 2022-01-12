<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jabatan::create([
            'nama' => 'KEPALA BIRO ADMINISTRASI PIMPINAN',
        ]);

        Jabatan::create([
            'nama' => 'KEPALA BAGIAN MATERI DAN KOMUNIKASI PIMPINAN',
        ]);

        Jabatan::create([
            'nama' => 'KABAG PROTOKOL',
        ]);

        Jabatan::create([
            'nama' => 'KEPALA BAGIAN PERENCANAAN DAN KEPEGAWAIAN SEKRETARIAT  DAERAH',
        ]);

        Jabatan::create([
            'nama' => 'KEPALA SUB BAGIAN TAMU'
        ]);

        Jabatan::create([
            'nama' => 'KEPALA SUB BAGIAN ACARA'
        ]);

        Jabatan::create([
            'nama' => 'KEPALA SUB BAGIAN PERENCANAAN DAN PELAPORAN'
        ]);

        Jabatan::create([
            'nama' => 'KEPALA SUB BAGIAN HUBUNGAN KEPROTOKOLAN'
        ]);

        Jabatan::create([
            'nama' => 'KEPALA SUB BAGIAN TATA USAHA'
        ]);

        Jabatan::create([
            'nama' => 'KEPALA SUB BAGIAN KEPEGAWAIAN'
        ]);

        Jabatan::create([
            'nama' => 'PRANATA HUBUNGAN MASYARAKAT AHLI MUDA'
        ]);

        Jabatan::create([
            'nama' => 'KEPALA SUB BAGIAN KOMUNIKASI PIMPINAN'
        ]);

        Jabatan::create([
            'nama' => 'KEPALA SUB BAGIAN DOKUMENTASI PIMPINAN'
        ]);

        Jabatan::create([
            'nama' => 'ANALIS PUBLIKASI'
        ]);

        Jabatan::create([
            'nama' => 'KEPALA SUB BAGIAN PENYIAPAN MATERI PIMPINAN'
        ]);

        Jabatan::create([
            'nama' => 'ANALIS PROTOKOL'
        ]);

        Jabatan::create([
            'nama' => 'PENYUSUN BAHAN INFORMASI DAN PUBLIKASI'
        ]);

        Jabatan::create([
            'nama' => 'ANALIS KERJASAMA'
        ]);

        Jabatan::create([
            'nama' => 'PENGADMINISTRASI ANALISIS DAN KEMITRAAN MEDIA'
        ]);

        Jabatan::create([
            'nama' => 'PENYUSUN PROGRAM ANGGARAN DAN PELAPORAN'
        ]);

        Jabatan::create([
            'nama' => 'CALON PENERJEMAH'
        ]);

        Jabatan::create([
            'nama' => 'PETUGAS PROTOKOL'
        ]);

        Jabatan::create([
            'nama' => 'PRANATA KOMPUTER MAHIR'
        ]);

        Jabatan::create([
            'nama' => 'PENGADMINISTRASI PEMERINTAHAN'
        ]);

        Jabatan::create([
            'nama' => 'PENGADMINISTRASI UMUM'
        ]);

        Jabatan::create([
            'nama' => 'PENGADMINISTRASI KEUANGAN'
        ]);

        Jabatan::create([
            'nama' => 'PENGADMINISTRASI PERSURATAN'
        ]);

        Jabatan::create([
            'nama' => 'PENGADMINISTRASI RAPAT'
        ]);
    }
}