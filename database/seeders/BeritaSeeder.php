<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $berita = new berita();
        $berita->id_categories = 1;
        $berita->id_users = 5;
        $berita->judul = "Chelsea vs Arsenal";
        $berita->isiPost = "Zinchenko dan Mudryk baru saja bahu membahu memperkuat Ukraina saat mengalahkan Malta 3-1 di Kualifikasi Piala Eropa 2024, Rabu (18/10) dinihari WIB. Mudryk menciptakan gol terakhir Ukraina. Diawali dari tusukan dari sayap kiri, Mudryk menuntaskan dengan tembakan kaki kanan dari luar kotak penalti yang bersarang di sudut atas gawang lawan. Usai pertandingan Zinchenko dan Mudryk berpisah untuk kembali ke klub masing-masing; Zinchenko ke Arsenal sedangkan Mudryk ke Chelsea. Selanjutnya, mereka akan berjumpa lagi di akhir pekan ini tapi sebagai lawan karena Arsenal akan menyambangi Chelsea di Stamford Bridge, Minggu (22/10).";
        $berita->judul = "Chelsea vs Arsenal";
        $berita->gambar = "Chelsea.jpeg";
        $berita->penulis = "Ahmad Supriadi";
        $berita->save();
    }
}