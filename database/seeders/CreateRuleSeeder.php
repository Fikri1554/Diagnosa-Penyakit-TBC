<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Seeder;

class CreateRuleSeeder extends Seeder
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
                'kode_penyakit' => 'P001',
                'G001' => true,
                'G012' => true,
                'G023' => true,
                'G034' => true,
                'G044' => true,
                'G045' => true,
                'G046' => true,
                'G047' => true
            ],
            [
                'kode_penyakit' => 'P002',
                'G002' => true,
                'G013' => true,
                'G024' => true,
                'G035' => true
            ],
            [
                'kode_penyakit' => 'P003',
                'G003' => true,
                'G014' => true,
                'G025' => true,
                'G036' => true,
                'G048' => true
            ],
            [
                'kode_penyakit' => 'P004',
                'G004' => true,
                'G015' => true,
                'G026' => true
            ],
            [
                'kode_penyakit' => 'P005',
                'G005' => true,
                'G016' => true,
                'G027' => true,
                'G037' => true,
                'G049' => true,
                'G050' => true,
                'G051' => true
            ],
            [
                'kode_penyakit' => 'P006',
                'G006' => true,
                'G017' => true,
                'G028' => true,
                'G038' => true
            ],
            [
                'kode_penyakit' => 'P007',
                'G007' => true,
                'G018' => true,
                'G029' => true,
                'G039' => true,
                'G052' => true,
                'G053' => true
            ],
            [
                'kode_penyakit' => 'P008',
                'G008' => true,
                'G019' => true,
                'G030' => true, 
                'G040' => true,
                'G054' => true,
                'G055' => true,
                'G056' => true
            ],
            [
                'kode_penyakit' => 'P009',
                'G009' => true,
                'G020' => true,
                'G031' => true,
                'G041' => true
            ],
            [
                'kode_penyakit' => 'P10',
                'G010' => true,
                'G021' => true,
                'G032' => true,
                'G042' => true,
                'G057' => true, 
                'G058' => true,
                'G059' => true,
                'G060' => true,
                'G061' => true,
                'G062' => true
            ],
            [
                'kode_penyakit' => 'P011',
                'G011' => true,
                'G022' => true,
                'G033' => true,
                'G043' => true,
                'G063' => true
            ]
        ];

        foreach($data as $row) {
            Rule::create($row);
        }
    }
}
