<?php

namespace App\Imports;

use App\Models\SoalKuis;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SoalKuisImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new SoalKuis([
            'indikator' => $row['indikator'],
            'pertanyaan' => $row['pertanyaan'],
            'jawaban_a' => $row['jawaban_a'],
            'jawaban_b' => $row['jawaban_b'],
            'jawaban_c' => $row['jawaban_c'],
            'jawaban_d' => $row['jawaban_d'],
            'jawaban_e' => $row['jawaban_e'],
            'kunci_jawaban' => $row['kunci_jawaban'],
            'pembahasan' => $row['pembahasan'],
            'pertemuan_id' => $row['pertemuan_id']
        ]);
    }
}
