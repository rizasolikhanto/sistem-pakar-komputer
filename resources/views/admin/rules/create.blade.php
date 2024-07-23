@extends('admin.layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mt-5 mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard / Rules / Tambah Rules</h1>
        <div class="separator-breadcrumb border-top"></div><!-- end of main-content -->
    </div>
    <a class="btn btn-primary mb-3" href="{{ route('admin.rules.index') }}">
        <i class="fa fa-arrow-left"></i> Kembali
    </a>
    <div class="card">
        <div class="d-flex align-items-center pl-4 pt-4 flex-row justify-content-between flex-wrap">
            <div>
                <h5 class="bg-white">Tambah Rules Kerusakan Komputer</h5>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.rules.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label class="text-danger">*</label>
                    <label for="prodi">Gejala</label>
                    @foreach($gejala as $g)
                    <div class="">
                        <input type="checkbox" class="mr-2" id="kode_gejala{{$g->kode_gejala}}" name="kode_gejala[]" value={{$g->kode_gejala}}>{{$g->gejala}}
                    </div>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label class="text-danger">*</label>
                    <label for="kode_kerusakan">Kode Kerusakan</label>
                    @foreach($kerusakan as $k)
                    <select class="form-control" id="kode_kerusakan" name="kode_kerusakan">
                        <option ><-- Pilih Kerusakan --></option>
                        <option value={{$k->kode_kerusakan}} {{ old('kerusakan') == $k->kode_kerusakan ? 'selected' : '' }}>{{$k->kerusakan}}</option>
                    </select>
                    @endforeach
                </div>
                <button button type="submit" class="btn btn-primary">Tambah</button>
                </form>
        </div>
    </div>
@endsection
