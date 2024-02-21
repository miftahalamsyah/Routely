<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Nilai;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KelompokController extends Controller
{
    private function initializeCenters($data, $k)
    {
        $data = Nilai::all(['pretest']);
        $k = 2;

        return $data->random($k)->toArray();
    }

    private function assignToClusters($data, $centers)
    {
        $clusters = [];

        foreach ($data as $item) {
            $minDistance = PHP_INT_MAX;
            $assignedCluster = null;

            foreach ($centers as $key => $center) {
                // Hitung jarak (gunakan Euclidean distance sebagai contoh)
                $distance = sqrt(pow($item['pretest'] - $center['pretest'], 2));

                // Pilih kluster dengan jarak terkecil
                if ($distance < $minDistance) {
                    $minDistance = $distance;
                    $assignedCluster = $key;
                }
            }

            // Tambahkan siswa ke kluster yang telah ditentukan
            $clusters[$assignedCluster][] = $item;
        }

        return $clusters;
    }

    private function updateCenters($data, $clusters)
    {
        $newCenters = [];

        foreach ($clusters as $key => $cluster) {
            // Sort cluster 1 in ascending order, and cluster 2 in descending order
            if ($key == 0) {
                usort($cluster, function ($a, $b) {
                    return $a['pretest'] - $b['pretest'];
                });
            } else {
                usort($cluster, function ($b, $a) {
                    return $b['pretest'] - $a['pretest'];
                });
            }

            // Take the median value as the new center
            $medianIndex = floor(count($cluster) / 2);
            $newCenters[] = [
                'pretest' => $cluster[$medianIndex]['pretest'],
            ];
        }

        return $newCenters;
    }

    public function index(): View
    {
        $kelompoks = Kelompok::orderBy('no_kelompok')->get();

        // Ambil data nilai siswa dari model (sesuaikan dengan model Anda)
        $data = Nilai::with('user')->get(['pretest', 'user_id']);

        // Proses normalisasi data jika diperlukan

        // Pilih jumlah kluster (K)
        $k = 2;

        // Inisialisasi pusat kluster secara acak
        $centers = $this->initializeCenters($data, $k);

        // Lakukan iterasi hingga konvergensi
        $maxIterations = 100;
        for ($i = 0; $i < $maxIterations; $i++) {
            // Hitung jarak dan assign siswa ke kluster
            $clusters = $this->assignToClusters($data, $centers);

            // Hitung ulang pusat kluster
            $newCenters = $this->updateCenters($data, $clusters);

            // Cek konvergensi
            if ($newCenters == $centers) {
                break;
            }

            $centers = $newCenters;
        }

        return view('dashboard.kelompok.index',
        [
            "title" => "Kelompok",
        ],compact('kelompoks', 'clusters'));
    }

    public function create()
    {
        $siswaUsers = User::where('is_admin', 0)
            ->whereNotIn('id', function ($query) {
                $query->select('user_id')
                    ->from('kelompoks');
            })
            ->get();

        return view('dashboard.kelompok.create', [
            'title' => 'Tambah Kelompok',
            'siswaUsers' => $siswaUsers,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'no_kelompok' => 'required',
            'name' => 'nullable',
            'description' => 'nullable',
        ]);

        $kelompok = Kelompok::create([
            'user_id' => $request->input('user_id'),
            'no_kelompok' => $request->input('no_kelompok'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('kelompok.index')->with('status', 'Kelompok created successfully!');
    }

    public function edit(string $id): View
    {
        $kelompok = Kelompok::findOrFail($id);
        $siswaUsers = User::where('is_admin', 0)->get();

        return view('dashboard.kelompok.edit', [
            'title' => 'Edit Kelompok',
            'kelompok' => $kelompok,
            'siswaUsers' => $siswaUsers,
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'no_kelompok' => 'required',
            'name' => 'nullable',
            'description' => 'nullable',
        ]);

        Kelompok::where('id', $id)
            ->update([
                'user_id' => $request->input('user_id'),
                'no_kelompok' => $request->input('no_kelompok'),
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

        return redirect()->route('kelompok.index')
            ->with('success', 'Kelompok updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $kelompok = Kelompok::findOrFail($id);

        $kelompok->delete();

        //redirect to index
        return redirect()->route('kelompok.index')
            ->with('success', 'Kelompok deleted successfully.');
    }

}
