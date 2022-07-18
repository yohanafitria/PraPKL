<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    //
    public function pengenalan()
    {
        $nama = "Yohana Fitria";
        $umur = "17 tahun";
        return view('pages1.pengenalan', compact('nama','umur'));
    }

    public function intro($nama, $alamat, $umur)
    {
        return view('pages1.intro', compact('nama','alamat','umur'));
        //tampilan output
        //localhost.8000/bay/bandung/23
    }

    public function siswa()
    {
        $a = [
            array('id' => 1, 'nama' => 'Safitri', 'umur' => 17, 'kelas' => 'XII RPL 1', 'mapel' => ['B.Indonesia','B.Inggris']),
            array('id' => 2, 'nama' => 'Surya', 'umur' => 17, 'kelas' => 'XII RPL 3', 'mapel' => ['MTK','IPA']),
            array('id' => 3, 'nama' => 'Rohesa', 'umur' => 17, 'kelas' => 'XII RPL 3', 'mapel' => ['SIMDIG','B.SUNDA']),
            array('id' => 4, 'nama' => 'Nadya', 'umur' => 16, 'kelas' => 'XII RPL 3', 'mapel' => ['FISIKA','KWU']),
            array('id' => 5, 'nama' => 'Siti', 'umur' => 17, 'kelas' => 'XII RPL 2', 'mapel' => ['PAI','AL-QURAN']),
        ];
        //melihat data dumy basic json
        // dd($a);

        //
        return view('/pages1.siswa', ['siswa' => $a]);
    }
}
