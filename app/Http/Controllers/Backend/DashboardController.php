<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\BidangUmum;
use App\Models\GotongRoyong;
use App\Models\Penghayatan;
use App\Models\Pendidikan;
use App\Models\Pengembangan;
use App\Models\Pangan;
use App\Models\Sandang;
use App\Models\Perumahan;
use App\Models\LaporanPokja1;
use App\Models\LaporanPokja3;
use App\Models\LaporanPokja4;
use App\Models\Kesehatan;
use App\Models\KelestarianLingkunganHidup;
use App\Models\PerencanaanSehat;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        // Helper filter
        $getFilteredQuery = function ($model) {

            // pakai default auth
            if (Auth::check()) {

                $user = Auth::user();
                $userId = $user->id;
                $userRole = $user->id_role;
                $subdistrictId = $user->id_subdistrict;

                if ($userRole == 2) { // Kecamatan
                    $desaIds = Pengguna::where('id_subdistrict', $subdistrictId)
                        ->where('id_role', 1)
                        ->pluck('id');

                    return $model->whereIn('id_user', $desaIds)
                        ->where(function ($query) {
                            $query->where('status', 'proses')
                                ->orWhere('status', 'Disetujui1');
                        });
                }
            }

            // default (kabupaten / admin)
            return $model->where(function ($query) {
                $query->where('status', 'Disetujui1')
                    ->orWhere('status', 'Disetujui2');
            });
        };

        // ================= DATA =================

        $bidangumum = $getFilteredQuery(new BidangUmum())->count();

        $totalbidang1 =
            $getFilteredQuery(new GotongRoyong())->count() +
            $getFilteredQuery(new Penghayatan())->count() +
            $getFilteredQuery(new LaporanPokja1())->count();

        $totalbidang2 =
            $getFilteredQuery(new Pendidikan())->count() +
            $getFilteredQuery(new Pengembangan())->count();

        // $totalbidang3 =
        //     $getFilteredQuery(new Pangan())->count() +
        //     $getFilteredQuery(new Sandang())->count() +
        //     $getFilteredQuery(new Perumahan())->count() +
        //     $getFilteredQuery(new LaporanPokja3())->count();

        // $totalbidang4 =
        //     $getFilteredQuery(new Kesehatan())->count() +
        //     $getFilteredQuery(new KelestarianLingkunganHidup())->count() +
        //     $getFilteredQuery(new PerencanaanSehat())->count() +
        //     $getFilteredQuery(new LaporanPokja4())->count();

        return view('backend.feature.dashboard', compact(
            'bidangumum',
            'totalbidang1',
            'totalbidang2'
            // 'totalbidang3',
            // 'totalbidang4'
        ));
    }
}
