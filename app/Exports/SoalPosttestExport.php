<?php

namespace App\Exports;

use App\Models\SoalTes;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SoalPosttestExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;

    public function query()
    {
        return SoalTes::query()
            ->select('indikator', 'gambar', 'pertanyaan', 'jawaban_a', 'jawaban_b', 'jawaban_c', 'jawaban_d', 'jawaban_e', 'kunci_jawaban', 'pembahasan', 'kategori_tes_id')
            ->where('kategori_tes_id', 2);
    }

    public function headings(): array
    {
        return ['Indikator', 'Gambar', 'Pertanyaan', 'Opsi A', 'Opsi B', 'Opsi C', 'Opsi D', 'Opsi E', 'Kunci Jawaban', 'Pembahasan', 'Kategori Tes ID'];
    }

    public function map($soal): array
    {
        return [
            $soal->indikator,
            $soal->gambar,
            $soal->pertanyaan,
            $soal->jawaban_a,
            $soal->jawaban_b,
            $soal->jawaban_c,
            $soal->jawaban_d,
            $soal->jawaban_e,
            $soal->kunci_jawaban,
            $soal->pembahasan,
            $soal->kategori_tes_id,
        ];
    }
}
