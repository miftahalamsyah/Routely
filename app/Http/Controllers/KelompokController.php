<?php

namespace App\Http\Controllers;

use App\Models\HasilTesSiswa;
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
        $data = HasilTesSiswa::where('kategori_tes_id', 1)->get(['total']);

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
                $distance = sqrt(pow($item['total'] - $center['total'], 2));

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

        // Calculate the average total for each cluster
        $clusterAverages = [];
        foreach ($clusters as $key => $cluster) {
            $total = 0;
            foreach ($cluster as $item) {
                $total += $item['total'];
            }
            $average = count($cluster) > 0 ? $total / count($cluster) : 0;
            $clusterAverages[$key] = $average;
        }

        // Sort the cluster averages in ascending order
        asort($clusterAverages);

        // Calculate the target number of students per cluster
        $numClusters = count($clusters);
        $totalStudents = count($data);
        $targetStudents = floor($totalStudents / $numClusters);
        $remainder = $totalStudents % $numClusters;

        // Assign the new centers based on the sorted averages and target students
        $averageKeys = array_keys($clusterAverages);
        foreach ($averageKeys as $i => $clusterIndex) {
            $numStudents = $targetStudents;
            // Adjust the number of students for the first few clusters
            if ($i < $remainder) {
                $numStudents++;
            }

            // Find the nearest total to the average within the cluster
            $nearestTotal = null;
            $minDistance = PHP_INT_MAX;
            foreach ($clusters[$clusterIndex] as $item) {
                $distance = abs($item['total'] - $clusterAverages[$clusterIndex]);
                if ($distance < $minDistance) {
                    $minDistance = $distance;
                    $nearestTotal = $item['total'];
                }
            }

            // Assign the nearest total as the new center for this cluster
            $newCenters[] = [
                'total' => $nearestTotal,
            ];

            // Check if the cluster has more students than the target
            $currentClusterSize = count($clusters[$clusterIndex]);
            if ($currentClusterSize > $numStudents + 1) {
                // Move some students to other clusters
                $numToMove = $currentClusterSize - $numStudents;
                while ($numToMove > 0) {
                    $overloadClusterIndex = $averageKeys[$i];
                    $underloadClusterIndex = $averageKeys[$i + 1];
                    if ($numToMove > 0 && $currentClusterSize > $numStudents + 1) {
                        // Move one student from the overload cluster to the underload cluster
                        $movedStudent = array_pop($clusters[$overloadClusterIndex]);
                        $clusters[$underloadClusterIndex][] = $movedStudent;
                        $numToMove--;
                        $currentClusterSize--;
                    } else {
                        break;
                    }
                }
            }
        }

        return $newCenters;
    }


    public function index(): View
    {
        $kelompoks = Kelompok::orderBy('no_kelompok')->get();

        // Ambil data nilai siswa dari model (sesuaikan dengan model Anda)
        $data = HasilTesSiswa::with('user')
        ->where('kategori_tes_id', 1)
        ->get(['total', 'user_id']);

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

        $kelompoks = Kelompok::orderBy('no_kelompok')->get();

        // Ambil data nilai siswa dari model (sesuaikan dengan model Anda)
        $data = HasilTesSiswa::with('user')
        ->where('kategori_tes_id', 1)
        ->get(['total', 'user_id']);

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

        return view('dashboard.kelompok.create', [
            'title' => 'Tambah Kelompok',
            'siswaUsers' => $siswaUsers,
        ],compact('kelompoks', 'clusters'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|array',
            'user_id.*' => 'exists:users,id',
            'no_kelompok' => 'required',
            'name' => 'nullable',
            'description' => 'nullable',
        ]);

        foreach ($request->input('user_id') as $userId) {
            Kelompok::create([
                'user_id' => $userId,
                'no_kelompok' => $request->input('no_kelompok'),
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);
        }

        return redirect()->route('kelompok.index')->with('status', 'Kelompok(s) created successfully!');
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
