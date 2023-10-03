<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class CreateGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Batuk terus menerus lebih dari 3 minggu',
                'kode' => 'G001'
            ],
            [
                'nama' => 'Benjolan kelenjar getah bening',
                'kode' => 'G002'
            ],
            [
                'nama' => 'Nyeri tulang belakang',
                'kode' => 'G003'
            ],
            [
                'nama' => 'Disfungsi berbagai organ dengan insufisiensi adreanal',
                'kode' => 'G004'
            ],
            [
                'nama' => 'Pembengkakan testis',
                'kode' => 'G005'
            ],
            [
                'nama' => 'Demam tinggi',
                'kode' => 'G006'
            ],
            
            [
                'nama' => 'Nyeri perut',
                'kode' => 'G007'
            ],
            
            [
                'nama' => 'Kelelahan',
                'kode' => 'G008'
            ],
            
            [
                'nama' => 'Asites (muncul cairan di rongga perut)',
                'kode' => 'G009'
            ],
            
            [
                'nama' => 'Munculnya luka terbuka di siku',
                'kode' => 'G010'
            ],
            
            [
                'nama' => 'Sakit dada',
                'kode' => 'G011'
            ],
            
            [
                'nama' => 'Batuk hingga mengeluarkan darah',
                'kode' => 'G012'
            ],
    
            [
                'nama' => 'Demam tinggi',
                'kode' => 'G013'
            ],
            [
                'nama' => 'Tulang terasa kaku',
                'kode' => 'G014'
            ],
            [
                'nama' => 'Ukuran paru-paru yang mengempis',
                'kode' => 'G015'
            ],
            [
                'nama' => 'Nyeri saat buang air kecil',
                'kode' => 'G016'
            ],
            [
                'nama' => 'Ukuran liver membesar',
                'kode' => 'G017'
            ],
            [
                'nama' => 'Hilang nafsu makan',
                'kode' => 'G018'
            ],
            [
                'nama' => 'Hilang nafsu makan',
                'kode' => 'G019'
            ],
            [
                'nama' => 'Mual dan muntah',
                'kode' => 'G020'
            ],
            [
                'nama' => 'Munculnya luka terbuka di tangan',
                'kode' => 'G021'
            ],
            [
                'nama' => 'Demam',
                'kode' => 'G022'
            ],
            [
                'nama' => 'Batuk berlendir',
                'kode' => 'G023'
            ],
            [
                'nama' => 'Kelelahan',
                'kode' => 'G024'
            ],
            [
                'nama' => 'Pembengkakan di sekitar tulang',
                'kode' => 'G025'
            ],
            [
                'nama' => 'Tekstur feses dapat menyerupai kondisi diare',
                'kode' => 'G026'
            ],
            [
                'nama' => 'Aliran urine tidak lancar atau berkurang',
                'kode' => 'G027'
            ],
            [
                'nama' => 'Nyeri perut bagian atas',
                'kode' => 'G028'
            ], 
            [
                'nama' => 'Berat badan turun',
                'kode' => 'G029'
            ],
            [
                'nama' => 'Sakit kepala terus menerus',
                'kode' => 'G030'
            ],
            [
                'nama' => 'Hilang nafsu makan',
                'kode' => 'G031'
            ],
            [
                'nama' => 'Muncul nya luka terbuka di bokong',
                'kode' => 'G032'
            ],
            [
                'nama' => 'Jantung berdebar',
                'kode' => 'G033'
            ],
            [
                'nama' => 'Nyeri dada',
                'kode' => 'G034'
            ],
            [
                'nama' => 'Keringat berlebih di malam hari',
                'kode' => 'G035'
            ],
            [
                'nama' => 'Muncul abses',
                'kode' => 'G036'
            ],
            [
                'nama' => 'Nyeri panggul',
                'kode' => 'G037'
            ],
            [
                'nama' => 'Terdapat Penyakit kuning',
                'kode' => 'G038'
            ],
            [
                'nama' => 'Konstipasi atau diare',
                'kode' => 'G039'
            ],
            [
                'nama' => 'Demam',
                'kode' => 'G040'
            ],
            [
                'nama' => 'Demam tinggi',
                'kode' => 'G041'
            ],
            [
                'nama' => 'Muncul nya luka terbuka di lutut bagian belakang',
                'kode' => 'G042'
            ],
            [
                'nama' => 'Sesak napas',
                'kode' => 'G043'
            ],
            [
                'nama' => 'Napas tersengal-sengal',
                'kode' => 'G044'
            ],
            [
                'nama' => 'Penurunan berat badan',
                'kode' => 'G045'
            ],
            [
                'nama' => 'Kelelahan',
                'kode' => 'G046'
            ],
            [
                'nama' => 'Demam',
                'kode' => 'G047'
            ],
            [
                'nama' => 'Perubahan bentuk tulang',
                'kode' => 'G048'
            ],
            [
                'nama' => 'Nyeri tulang belakang',
                'kode' => 'G049'
            ],
            [
                'nama' => 'Volume semen berkurang',
                'kode' => 'G050'
            ],
            [
                'nama' => 'Terdapat Infertilitas',
                'kode' => 'G051'
            ],
            [
                'nama' => 'Mual dan muntah',
                'kode' => 'G052'
            ],
            [
                'nama' => 'Perut terasa berat',
                'kode' => 'G053'
            ],
            [
                'nama' => 'Mual dan muntah',
                'kode' => 'G054'
            ],
            [
                'nama' => 'Rasa nyeri di sekujur tubuh',
                'kode' => 'G055'
            ],
            [
                'nama' => 'Sensitif terhadap cahaya',
                'kode' => 'G056'
            ],
            [
                'nama' => 'Muncul nya luka terbuka di kaki',
                'kode' => 'G057'
            ],
            [
                'nama' => 'Kulit menjadi keunguan atau merah kecokelatan',
                'kode' => 'G058'
            ],
            [
                'nama' => 'Muncul kutil',
                'kode' => 'G059'
            ],
            [
                'nama' => 'Terdapat benjolan kecil',
                'kode' => 'G060'
            ],
            [
                'nama' => 'Kulit menjadi borok',
                'kode' => 'G061'
            ],
            [
                'nama' => 'Abses',
                'kode' => 'G062'
            ],
            [
                'nama' => 'Batuk',
                'kode' => 'G063'
            ]
        ];

        Gejala::insert($data);
    }
}
