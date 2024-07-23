@extends('admin.layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mt-5 mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard / Gejala / Tambah Gejala</h1>
        <div class="separator-breadcrumb border-top"></div><!-- end of main-content -->
    </div>
    <a class="btn btn-primary mb-3" href="{{ route('admin.gejala.index') }}">
        <i class="fa fa-arrow-left"></i> Kembali
    </a>
    <div class="card">
        <div class="d-flex align-items-center pl-4 pt-4 flex-row justify-content-between flex-wrap">
            <div>
                <h5 class="bg-white">Tambah Gejala Kerusakan Komputer</h5>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.gejala.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label class="text-danger">*</label>
                    <label for="kode_gejala">Kode Gejala</label>
                    <input class="form-control" id="kode_gejala" type="text" placeholder="Kode gejala" name="kode_gejala" value="{{ old('kode_gejala') }}" required>
                </div>  
                <div class="mb-3">
                    <label class="text-danger">*</label>
                    <label for="gejala">Gejala</label>
                    <input class="form-control" id="gejala" type="text" placeholder="gejala" name="gejala" value="{{ old('gejala') }}" required>
                </div>
                <button button type="submit" class="btn btn-primary">Tambah</button>
                </form>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
