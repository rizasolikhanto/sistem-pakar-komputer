<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Damage;
use App\Models\Rule;
use App\Models\Sympton;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rules = Rule::all();
        return view('admin.rules.index',compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $gejala = Sympton::all();
        $kerusakan = Damage::all();
        return view('admin.rules.create',compact('gejala','kerusakan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_gejala' => 'required|array',
            'kode_kerusakan' => 'required',
        ]);

        $rule = new Rule;
        $rule->kode_kerusakan = $data['kode_kerusakan'];
        $rule->kode_gejala = json_encode($data['kode_gejala']);
        $rule->save();
        return redirect('admin/rules')->with('toast_success', 'Data rules berhasil ditambahkan!');
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
        $gejala = Sympton::all();
        $kerusakan = Damage::all();
        $rule=Rule::all();
        return view('admin.rules.edit',compact('gejala','kerusakan','rule'));
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
        Rule::destroy($id);
        return redirect('/admin/rules')->with('toast_success', 'Data rule berhasil dihapus!');
    }
}
