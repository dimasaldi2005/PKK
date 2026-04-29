<?php

namespace App\Http\Controllers\frontend;

use App\Models\Berita;


use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class BeritaController extends Controller
{
    //
    public function index(Request $request)
    {
        $today = now()->format('Y-m-d');
        $visitor = Visitor::firstOrNew(['tanggal' => $today]);
        $visitor->count++;
        $visitor->save();

        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $totalMinggu = Visitor::whereBetween('tanggal', [$startOfWeek, $endOfWeek])
            ->sum('count');

        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        $totalBulan = Visitor::whereBetween('tanggal', [$startOfMonth, $endOfMonth])
            ->sum('count');

        $startOfYear = Carbon::now()->startOfYear();
        $endOfYear = Carbon::now()->endOfYear();

        $totalTahun = Visitor::whereBetween('tanggal', [$startOfYear, $endOfYear])
            ->sum('count');

        $totalVisitors = Visitor::sum('count');

        if ($request->has('search')) {
            $beritas = Berita::where('judul', 'LIKE', '%' . $request->search . '%')->paginate(3);
        } else {
            $beritas = Berita::latest()->paginate(3);
        }


        //render view with posts
        return view('frontend.berita', compact('beritas', 'visitor', 'totalMinggu', 'totalBulan', 'totalTahun', 'totalVisitors'));
    }
}
