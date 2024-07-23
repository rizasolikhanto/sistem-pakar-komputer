<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sympton;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gejala = Sympton::all();
        return view('admin.gejala.index',compact('gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gejala.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode_gejala' => 'required',
            'gejala' => 'required',
        ]);
        Sympton::create($request->all());
        return redirect('admin/gejala')->with('toast_success', 'Data gejala berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gejala = Sympton::findOrFail($id);;
        return view('admin.gejala.edit',compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'kode_gejala' => 'required',
            'gejala' => 'required',
        ]);

        Sympton::where('id', $id)->update([
            'kode_gejala' => $request->kode_gejala,
            'gejala' => $request->gejala,
        ]);
        return redirect('admin/gejala')->with('toast_success', 'Data gejala berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Sympton::destroy($id);
        return redirect('/admin/gejala')->with('toast_success', 'Data gejala berhasil dihapus!');
    }
}
