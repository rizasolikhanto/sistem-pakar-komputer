<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Damage;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kerusakan = Damage::all();
        return view('admin.kerusakan.index',compact('kerusakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.kerusakan.create');
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
            'kode_kerusakan' => 'required',
            'kerusakan' => 'required',
        ]);
        Damage::create($request->all());
        return redirect('admin/kerusakan')->with('toast_success', 'Data kerusakan berhasil ditambahkan!');
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
        //
        $kerusakan = Damage::findOrFail($id);;
        return view('admin.kerusakan.edit',compact('kerusakan'));
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
            'kode_kerusakan' => 'required',
            'kerusakan' => 'required',
        ]);

        Damage::where('id', $id)->update([
            'kode_kerusakan' => $request->kode_kerusakan,
            'kerusakan' => $request->kerusakan,
        ]);
        return redirect('admin/kerusakan')->with('toast_success', 'Data kerusakan berhasil diubah!');
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
        Damage::destroy($id);
        return redirect('/admin/kerusakan')->with('toast_success', 'Data kerusakan berhasil dihapus!');
    }
}
