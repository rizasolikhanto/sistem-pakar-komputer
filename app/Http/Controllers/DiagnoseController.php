<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\Sympton;
use Illuminate\Http\Request;

class DiagnoseController extends Controller
{
    //
    public function index(){
        $gejala = Sympton::all();
        return view('diagnosa',compact('gejala'));
    }

    public function diagnosa(Request $request)
    {
        $query = Rule::query();

        if ($request->has('kode_gejala')) {
            $kode_gejala = $request->input('kode_gejala');
            $query->whereIn('kode_gejala', $kode_gejala);
        }

        $results = $query->first();

        return view('hasil-diagnosa', compact('results'));
    }

}
