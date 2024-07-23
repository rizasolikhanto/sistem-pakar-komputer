@extends('admin.layouts.app')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mt-5 mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard / Kerusakan / Ubah Kerusakan</h1>
        <div class="separator-breadcrumb border-top"></div><!-- end of main-content -->
    </div>
    <a class="btn btn-primary mb-3" href="{{ route('admin.kerusakan.index') }}">
        <i class="fa fa-arrow-left"></i> Kembali
    </a>
    <div class="card">
        <div class="d-flex align-items-center pl-4 pt-4 flex-row justify-content-between flex-wrap">
            <div>
                <h5 class="bg-white">Ubah Daftar Kerusakan Komputer</h5>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.kerusakan.update', $kerusakan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="mb-3">
                    <label class="text-danger">*</label>
                    <label for="kode_kerusakan">Kode kerusakan</label>
                    <input class="form-control" id="kode_kerusakan" type="text" placeholder="Kode kerusakan" name="kode_kerusakan" value="{{ old('kode_kerusakan',$kerusakan->kode_kerusakan) }}" required>
                </div>  
                <div class="mb-3">
                    <label class="text-danger">*</label>
                    <label for="kerusakan">kerusakan</label>
                    <input class="form-control" id="kerusakan" type="text" placeholder="kerusakan" name="kerusakan" value="{{ old('kerusakan',$kerusakan->kerusakan) }}" required>
                </div>
                <button button type="submit" class="btn btn-primary">Ubah</button>
                </form>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection