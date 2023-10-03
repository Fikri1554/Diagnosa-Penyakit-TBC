<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GejalaPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
             // 1. TB Paru 
             [
                'penyakit_id' => 1,
                'gejala_id' => 1,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 12,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 23,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 34,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 44,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 45,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 46,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 47,
                'value_cf' => 0.2
            ],

            // 2. TB Limfadenitis
            [
                'penyakit_id' => 2,
                'gejala_id' => 2,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 2,
                'gejala_id' => 13,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 2,
                'gejala_id' => 24,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 2,
                'gejala_id' => 35,
                'value_cf' => 0.4
            ],

            // 3. TB Tulang
            [
                'penyakit_id' => 3,
                'gejala_id' => 3,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 3,
                'gejala_id' => 14,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 3,
                'gejala_id' => 25,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 3,
                'gejala_id' => 36,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 3,
                'gejala_id' => 48,
                'value_cf' => 0.6
            ],

            // 4. TB Milier
            [
                'penyakit_id' => 4,
                'gejala_id' => 4,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 4,
                'gejala_id' => 15,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 4,
                'gejala_id' => 26,
                'value_cf' => 0.2
            ],
            

            // 5. TB Urogenital
            [
                'penyakit_id' => 5,
                'gejala_id' => 5,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 5,
                'gejala_id' => 16,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 5,
                'gejala_id' => 27,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 5,
                'gejala_id' => 37,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 5,
                'gejala_id' => 49,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 5,
                'gejala_id' => 50,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 5,
                'gejala_id' => 51,
                'value_cf' => 0.8
            ],

            // 6. TB  Liver
            [
                'penyakit_id' => 6,
                'gejala_id' => 6,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 6,
                'gejala_id' => 17,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 6,
                'gejala_id' => 28,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 6,
                'gejala_id' => 38,
                'value_cf' => 0.4
            ],
            

            // 7. Tuberkulosis Gastrointestinal
            [
                'penyakit_id' => 7,
                'gejala_id' => 7,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 7,
                'gejala_id' => 18,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 7,
                'gejala_id' => 29,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 7,
                'gejala_id' => 39,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 7,
                'gejala_id' => 52,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 7,
                'gejala_id' => 53,
                'value_cf' => 0.8
            ],

            // 8. TB Meningitis
            [
                'penyakit_id' => 8,
                'gejala_id' => 8,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 8,
                'gejala_id' => 19,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 8,
                'gejala_id' => 30,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 8,
                'gejala_id' => 40,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 8,
                'gejala_id' => 54,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 8,
                'gejala_id' => 55,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 8,
                'gejala_id' => 56,
                'value_cf' => 0.8
            ],

            // 9. TB Peritonitis
            [
                'penyakit_id' => 9,
                'gejala_id' => 9,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 9,
                'gejala_id' => 20,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 9,
                'gejala_id' => 31,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 9,
                'gejala_id' => 41,
                'value_cf' => 0.8
            ],

            // 10. TB Kulit
            [
                'penyakit_id' => 10,
                'gejala_id' => 10,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 10,
                'gejala_id' => 21,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 10,
                'gejala_id' => 32,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 10,
                'gejala_id' => 42,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 10,
                'gejala_id' => 57,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 10,
                'gejala_id' => 58,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 10,
                'gejala_id' => 59,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 10,
                'gejala_id' => 60,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 10,
                'gejala_id' => 61,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 10,
                'gejala_id' => 62,
                'value_cf' => 0.8
            ],
            
            // 11. TB Perikarditis
            [
                'penyakit_id' => 11,
                'gejala_id' => 11,
                'value_cf' => 1
            ],
            [
                'penyakit_id' => 11,
                'gejala_id' => 22,
                'value_cf' => 1
            ],
            [
                'penyakit_id' => 11,
                'gejala_id' => 33,
                'value_cf' => 1
            ],
            [
                'penyakit_id' => 11,
                'gejala_id' => 43,
                'value_cf' => 1
            ],
            [
                'penyakit_id' => 11,
                'gejala_id' => 63,
                'value_cf' => 1
            ]
            
        ];

        DB::table('gejala_penyakit')->insert($data);
    }
}
