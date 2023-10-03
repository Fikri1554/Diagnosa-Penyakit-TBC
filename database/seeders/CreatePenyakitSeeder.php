<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class CreatePenyakitSeeder extends Seeder
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
                'nama' => 'Tuberkulosis Paru',
                'kode' => 'P001',
                'penyebab' => 'Penyakit yang disebabkan oleh infeksi bakteri Mycobacterium tuberculosis. Bakteri tersebut dapat masuk ke dalam paru-paru dan mengakibatkan pengidapnya mengalami sesak napas disertai batuk kronis.'
            ],
            [
                'nama' => 'Tuberkulosis Limfadenitis',
                'kode' => 'P002',
                'penyebab' => 'Infeksi oleh bakteri Mycobacterium tuberculosis, yang dapat masuk ke dalam tubuh melalui saluran pernapasan dan menyebar melalui darah ke kelenjar getah bening.'
            ],
            [
                'nama' => 'Tuberkulosis Tulang',
                'kode' => 'P003',
                'penyebab' => 'Penyakit tuberkulosis tulang, atau osteotuberkulosis, terjadi ketika bakteri Mycobacterium tuberculosis menginfeksi tulang atau sendi. Bakteri ini dapat menyebar melalui aliran darah dari tempat infeksi awalnya, seperti paru-paru, ke tulang dan sendi.'
            ],
            [
                'nama' => 'Tuberkulosis Milier',
                'kode' => 'P004',
                'penyebab' => 'Abstrak Tuberkulosis milier merupakan kelainan patologis berupa granuloma berukuran 1- 2 mm, yang disebabkan penyebaran Mycobacterium tuberculosis secara hematogen dan limfogen di organ paru atau ekstraparu.'
            ],
            [
                'nama' => 'Tuberkulosis Urogenital',
                'kode' => 'P005',
                'penyebab' => 'TBC kandung kemih dapat terjadi sebagai infeksi sekunder akibat dari TBC ginjal, di mana M. TB menyerang melalui urin, atau dapat juga menyebar melalui aliran darah atau kelenjar. TBC pada kandung kemih juga telah terbukti terjadi melalui penyebaran dari prostat atau testis.'
            ],
            [
                'nama' => 'Tuberkulosis Liver',
                'kode' => 'P006',
                'penyebab' => 'Infeksi bakteri Mycobacterium tuberculosis yang menyerang organ hati.'
            ],
            [
                'nama' => 'Tuberkulosis Gastrointestinal',
                'kode' => 'P007',
                'penyebab' => 'Bakteri Mycobacterium tuberculosis, yang biasanya menyerang paru-paru, tetapi terjadi di usus. Gangguan ini disebut juga sebagai TBC usus. Saat menyerang, pengidapnya dapat mengalami beberapa gejala gastritis.'
            ], 
            [
                'nama' => 'Tuberkulosis Meningitis',
                'kode' => 'P008',
                'penyebab' => 'Infeksi bakteri Mycobacterium tuberculosis (M. tuberculosis) yang menyebar dari bagian tubuh lain, seperti paru-paru, ke sistem saraf pusat.'
            ],
            [
                'nama' => 'Tuberkulosis Peritonitis',
                'kode' => 'P009',
                'penyebab' => 'Infeksi bakteri Mycobacterium tuberculosis yang menyerang peritoneum, yaitu lapisan tipis yang melapisi dinding perut dan organ-organ di dalamnya.'
            ],
            [
                'nama' => 'Tuberkulosis Kulit',
                'kode' => 'P010',
                'penyebab' => 'Infeksi bakteri Mycobacterium tuberculosis yang menyerang kulit. Penyakit ini dapat menyerang siapa saja, tetapi lebih sering terjadi pada orang dengan sistem kekebalan tubuh yang lemah.'
            ],
            [
                'nama' => 'Tuberkulosis Perikarditis',
                'kode' => 'P011',
                'penyebab' => 'Infeksi bakteri Mycobacterium tuberculosis yang menyerang perikardium, yaitu lapisan tipis yang melapisi jantung.'
            ]
        ];

        Penyakit::insert($data);
    }
}
