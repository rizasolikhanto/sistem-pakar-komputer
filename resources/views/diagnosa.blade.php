@extends('front.app')

@section('title', 'Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi')

@section('content')
<div class="container">
    <div class="masthead row justify-content-center">
        <div class="card o-hidden col-lg-6 mb-5">
            <div class="row">
                <div class="col-md">
                    <div class="p-4">
                        <h2 class="mb-3 text-center">Diagnosa Kerusakan Komputer Anda!</h1>
                        <p>Pilih gejala kerusakan yang komputer anda alami</p>
                        <form method="POST" id="symptomsForm">
                            @csrf
                            <div class="mb-3">
                                <label for="prodi">Gejala Kerusakan</label>
                                @foreach($gejala as $g)
                                <div class="">
                                    <input type="checkbox" style="margin-right: 5px" id="kode_gejala" name="gejala[]" value={{$g->kode_gejala}}>{{$g->gejala}}
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">Diagnosa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
