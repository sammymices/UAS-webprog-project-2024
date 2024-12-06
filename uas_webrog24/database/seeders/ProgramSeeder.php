<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;


class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            'title' => 'PHBI (Perayaan Hari Besar Islam)',
            'image' => 'Assets/phbi.jpg',
            'description' => 'Yayasan Al-Mubarok memperingati hari-hari besar Islam seperti Idul Fitri, Idul Adha, dan hari-hari penting lainnya. Acara ini diisi dengan kegiatan ibadah bersama seperti sholat berjamaah, tausiyah, serta kegiatan sosial seperti berbagi zakat dan sedekah kepada mereka yang membutuhkan. PHBI bertujuan untuk mempererat silaturahmi antar umat Islam dan meningkatkan kesadaran sosial.'
        ]);
    
        Program::create([
            'title' => 'Isra Mi\'raj',
            'image' => 'Assets/isra.jpg',
            'description' => 'Peringatan Isra Mi\'raj Nabi Muhammad SAW menjadi momen penting dalam sejarah Islam. Yayasan Al-Mubarok mengadakan kajian dan doa bersama untuk mengenang perjalanan spiritual Nabi Muhammad SAW dari Masjidil Haram ke Masjidil Aqsa dan naik ke langit. Acara ini diharapkan dapat memperkuat keimanan serta menjadi sarana refleksi bagi umat Islam dalam meningkatkan kualitas ibadah.'
        ]);
    
        Program::create([
            'title' => 'Maulid Nabi Muhammad SAW',
            'image' => 'Assets/maulid.jpg',
            'description' => 'Peringatan Maulid Nabi Muhammad SAW diadakan untuk merayakan kelahiran Nabi yang penuh berkah. Kegiatan ini biasanya diisi dengan pengajian, tausiyah, serta ceramah agama yang mengangkat nilai-nilai kehidupan Nabi Muhammad SAW. Tujuan dari acara ini adalah untuk menginspirasi umat Islam agar meneladani akhlak dan sunnah Nabi dalam kehidupan sehari-hari.'
        ]);
    }
}
