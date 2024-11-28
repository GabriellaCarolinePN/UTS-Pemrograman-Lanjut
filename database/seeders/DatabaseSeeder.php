<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\Profile::create([
            'name' => 'Gabriella Caroline Prihayu Ningsih',
            'description' => 'Saya adalah mahasiswa semester 7 jurusan Pendidikan Teknik Informatika dan Komputer di UNS yang memiliki minat pada pemrograman web. Saya memiliki keterampilan dalam pemrograman web seperti HTML, CSS, dan bahasa pemrograman PHP. Dengan minat yang kuat untuk mengembangkan solusi pembelajaran melalui teknologi web, saya berusaha untuk terus meningkatkan kemampuan dalam desain dan pengembangan situs web yang interaktif dan user-friendly. Selain itu, saya sedang aktif membuat proyek-proyek sebagai portofolio yang akan memperkuat keterampilan teknis saya. Selain itu, saya juga memiliki kemampuan kerja sama dan komunikasi yang baik dalam tim.',
            'photo' => 'gabriella.jpg', 
            'contact' => 'lalagabriella03@gmail.com'
        ]);

        \App\Models\Project::insert([
            [
                'title' => 'MG Software House',
                'description' => 'Merupakan website yang menekankan pada desain. Tampilannya masih sederhana karena website ini dipakai sebagai latihan dalam pembuatan website.',
                'image' => 'proyek1.jpg',
                'link' => 'https://mgsoftwarehouse.netlify.app'
            ],
            [
                'title' => 'Quantum Stock',
                'description' => 'Merupakan aplikasi inventory gudang yang memiliki fitur CRUD (Create, Delete, Update, dan Read). Aplikasi ini dipakai untuk mencatat setiap peminjaman sarana dan prasarana di gudang lab.',
                'image' => 'proyek2.jpg',
                'link' => 'https://github.com/ardiansyah999/project-ppb'
            ],
            [
                'title' => 'PPQITA-Penilaian',
                'description' => 'Merupakan website PPQITA yang mengelola penilaian para siswa di Pondok Pesantren Quran dan IT Al-Mahir. Website ini merupakan website lanjutan dan berkaitan dengan website akademik yang telah dimiliki oleh PPQITA',
                'image' => 'proyek3.jpg',
                'link' => 'https://github.com/WebsiteAkademik/PPQITA-Penilaian'
            ]
        ]);
    }

}
