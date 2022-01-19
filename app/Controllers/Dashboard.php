<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $this->Nama = "Devi Anggita Ambarwati";
        $this->Ttl = "Sragen, 27 Februari 2002";
        $this->Umur = "19 Tahun";
        $this->Universitas = "D3 Teknik Informatika UNS";
        $this->Harapan = "Magang Full-Stack Developer melalui Program Kampus Merdeka";



        $data = [
            'judul' => "Devi AA",
            'nama' => "Devi Anggita Ambarwtai",
            'alamat' => 'Mojopuro, SUmberlawnag, Sragen',
            'olahraga' => 'Bulutangkis',
            'buku' => ['PHP KOMPLET karya Jubilee Enterprise', 'Menguasai PBO karya Ade Rahmat Iskandar', 'Kriptografi Edisi Kedua karya Rinaldi Munir'],
            'harapan' => ['Dapat mengimplementasikan ilmu di kuliah untuk magang dan bekerja', 'Mendapatkan pekerjaan sesuai keinginan', 'Mendapatkan tempat magang sesuai keinginan', 'Membahagiakan Orang Tua'],
            'angkatan' => 2020,
            'nim' => 223420028,
            'diri' => $this
        ];

        return view('Konten/index', $data);
    }
}
