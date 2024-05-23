<?php

namespace App\Exports;

use App\Models\HasilTesSiswa;
use App\Models\SoalTes;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class NilaiPretestExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;

    private $kategoriTesId;

    public function __construct($kategoriTesId)
    {
        $this->kategoriTesId = $kategoriTesId;
    }

    public function query()
    {
        return HasilTesSiswa::query()
            ->where('kategori_tes_id', $this->kategoriTesId)
            ->join('users', 'hasil_tes_siswas.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->select('hasil_tes_siswas.*', 'users.name as user_name');
    }

    public function headings(): array
    {
        $soalTesCount = SoalTes::where('kategori_tes_id', $this->kategoriTesId)->count();
        $headings = ['Nama Siswa'];
        for ($i = 1; $i <= $soalTesCount; $i++) {
            $headings[] = "S{$i}";
        }
        return $headings;
    }

    public function map($hasilTes): array
    {
        $jawabanArray = str_split($hasilTes->jawaban);
        $soalTes = SoalTes::where('kategori_tes_id', $this->kategoriTesId)->get();
        $mapData = [
            $hasilTes->user_name,
        ];

        foreach ($jawabanArray as $i => $jawaban) {
            // Ensure the value is an integer (either 1 or 0)
            $mapData[] = (int) ($jawaban == $soalTes[$i]->kunci_jawaban ? 1 : 0);
        }

        return $mapData;
    }
}
