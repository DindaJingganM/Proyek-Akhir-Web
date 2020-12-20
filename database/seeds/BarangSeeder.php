<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'nama_album'=>'NCT 2020 - RESONANCE pt 1 [ORIGINAL KPOP ALBUM]',
            'gambar'=>'../img/nct1.png',
            'harga'=>350000,
            'stock'=> 4,
            'keterangan'=>'NCT 2020 : RESONANCE Pt. 1 TIMELINE

            NCT 2020 The 1st Album
            〖 NCT 2020 : RESONANCE Pt. 1 〗
            Pre-order ➫ 2020.09.21',
            'Artis'=>'NCT',
            'tanggal_rilis'=>'12 Oktober 2020',
            'produser'=>'Lee Soo man',
            'Genre'=>'Pop'
             ]);
        DB::table('barangs')->insert([
            'nama_album'=>'NCT 2020 - RESONANCE pt 2 [ORIGINAL KPOP ALBUM]',
            'gambar'=>'../img/nct2.png',
            'harga'=>375000,
            'stock'=> 6,
            'keterangan'=>'NCT 2020 : RESONANCE Pt. 2 TIMELINE

            NCT 2020 The 1st Album
            〖 NCT 2020 : RESONANCE Pt. 2 〗
            Pre-order ➫ 2020.11.14',
            'Artis'=>'NCT',
            'tanggal_rilis'=>'23 November 2020',
            'produser'=>'Lee Soo man',
            'Genre'=>'K-Pop'
            ]);
        DB::table('barangs')->insert([
                'nama_album'=>'TWICE 9th Mini Album - MORE & MORE',
                'gambar'=>'../img/twice.jpg',
                'harga'=>290000,
                'stock'=> 5,
                'keterangan'=>'〖 TWICE 9th Mini Album - MORE & MORE 〗 Pre-order ➫ 2020.06.01',
                'Artis'=>'TWICE',
                'tanggal_rilis'=>'1 Juni 2020',
                'produser'=>'JYP Entertaiment',
                'Genre'=>'K-pop, Musik dansa elektro'
            ]);
        DB::table('barangs')->insert([
                'nama_album'=>'The ReVe Festival: Day 2',
                'gambar'=>'../img/rv.jpg',
                'harga'=>260000,
                'stock'=> 5,
                'keterangan'=>'〖 The ReVe Festival: Day 2 〗 Pre-order ➫ 2019.08.20',
                'Artis'=>'Red Velvet',
                'tanggal_rilis'=>'20 Agustus 2019',
                'produser'=>'Lee Soo man',
                'Genre'=>'K-pop, R&B kontemporer, Doo-wop, Nu-disco'
            ]);
        DB::table('barangs')->insert([
                'nama_album'=>'GO LIVE',
                'gambar'=>'../img/skz.jpg',
                'harga'=>260000,
                'stock'=> 5,
                'keterangan'=>'〖 Stray Kidz - GO LIVE 〗 Pre-order ➫ 2020.06.10',
                'Artis'=>'Stray Kids',
                'tanggal_rilis'=>'17 Juni 2020',
                'produser'=>'JYP Entertaiment',
                'Genre'=>'Penyanyi rap, Hip hop'
            ]);
        DB::table('barangs')->insert([
                'nama_album'=>'i DECIDE',
                'gambar'=>'../img/ikon.jpg',
                'harga'=>310000,
                'stock'=> 6,
                'keterangan'=>'〖 IKON - i DECIDE 〗 Pre-order ➫ 2020.01.25',
                'Artis'=>'IKON',
                'tanggal_rilis'=>'6 Februari 2020',
                'produser'=>'YG Entertaiment',
                'Genre'=>'K-pop'
            ]);
        DB::table('barangs')->insert([
                'nama_album'=>'The First Step: Chapter One',
                'gambar'=>'../img/trs.jpg',
                'harga'=>310000,
                'stock'=> 6,
                'keterangan'=>'〖 TREASURE The 1st Album - The First Step: Chapter One 〗 Pre-order ➫ 2020.07.25',
                'Artis'=>'Treasure',
                'tanggal_rilis'=>'7 Agustus 2020',
                'produser'=>'Choice37; Rovin; Hea; S.eA; R. Tee',
                'Genre'=>'K-pop, Dance/Elektronik'
            ]);
    }
}
