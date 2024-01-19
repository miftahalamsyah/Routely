<?php

namespace App\Imports;

use App\Models\SoalTes;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SoalTesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new SoalTes([
            'indikator' => $row['indikator'],
            'pertanyaan' => $row['pertanyaan'],
            'jawaban_a' => $row['jawaban_a'],
            'jawaban_b' => $row['jawaban_b'],
            'jawaban_c' => $row['jawaban_c'],
            'jawaban_d' => $row['jawaban_d'],
            'jawaban_e' => $row['jawaban_e'],
            'kunci_jawaban' => $row['kunci_jawaban'],
            'pembahasan' => $row['pembahasan'],
            'kategori_tes_id' => $row['kategori_tes_id']
            // Add other columns accordingly
        ]);
    }
}
