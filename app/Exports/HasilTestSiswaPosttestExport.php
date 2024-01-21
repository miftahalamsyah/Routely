<?php

namespace App\Exports;

use App\Models\HasilTesSiswa;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class HasilTestSiswaPosttestExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;

    public function query()
    {
        return HasilTesSiswa::query()
            ->select('user_id', 'dekomposisi', 'abstraksi', 'pengenalan_pola', 'algoritma', 'benar', 'salah', 'total')
            ->where('kategori_tes_id', 2);
    }

    public function headings(): array
    {
        return ['Nama', 'Dekomposisi', 'Abstraksi', 'Pengenalan Pola', 'Algoritma', 'Benar', 'Salah', 'Total'];
    }

    public function map($user): array
    {
        // Get the User model for the given user_id
        $userModel = User::find($user->user_id);

        // Return an array with the desired values
        return [
            'user_name' => $userModel->name ?? 0,
            'dekomposisi' => $user->dekomposisi ?? 0,
            'abstraksi' => $user->abstraksi ?? 0,
            'pengenalan_pola' => $user->pengenalan_pola ?? 0,
            'algoritma' => $user->algoritma ?? 0,
            'benar' => $user->benar ?? 0,
            'salah' => $user->salah ?? 0,
            'total' => $user->total ?? 0,
        ];
    }
}
