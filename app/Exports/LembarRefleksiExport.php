<?php

namespace App\Exports;

use App\Models\Refleksi;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LembarRefleksiExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;

    public function query()
    {
        return Refleksi::query()
            ->with('user') // Make sure to eager load the user relationship
            ->select('id', 'user_id', 'pertemuan_id', 'seberapa_paham', 'seberapa_baik', 'seberapa_sulit', 'hambatan', 'saran');
    }

    public function headings(): array
    {
        return [
            'No.',
            'Nama',
            'Pertemuan',
            'Seberapa Paham',
            'Seberapa Baik',
            'Seberapa Sulit',
            'Hambatan',
            'Saran',
        ];
    }

    public function map($refleksi): array
    {
        return [
            $refleksi->id,
            $refleksi->user->name,
            $refleksi->pertemuan_id,
            $refleksi->seberapa_paham,
            $refleksi->seberapa_baik,
            $refleksi->seberapa_sulit,
            $refleksi->hambatan,
            $refleksi->saran,
        ];
    }
}
