@extends('admin.layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mt-5 mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard / Rules</h1>
        <div class="separator-breadcrumb border-top"></div><!-- end of main-content -->
    </div>
    <div class="card">
        <div class="d-flex align-items-center pl-4 pt-4 flex-row justify-content-between flex-wrap">
            <div>
                <h5 class="bg-white">Daftar Rules Kerusakan Komputer</h5>
                <a class="btn btn-success mt-3" href="{{ route('admin.rules.create') }}">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
            {{-- <form method="get" class="form-inline my-2 my-lg-0">
                <input type="text" name="key" class="form-control mr-sm-2" value="{{ $_GET['key'] ?? '' }}" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Gejala</th>
                        <th>Kerusakan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($rules as $g)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $g->kode_gejala }}</td>
                            <td>{{ $g->damages->kerusakan }}</td>
                            <td class="d-flex ">
                                <a href="{{ route('admin.rules.edit', $g->id) }}" class="btn btn-sm btn-primary mx-1">
                                    <i class="fas fa-edit"></i>Ubah
                                </a>
                                <form action="{{ route('admin.rules.destroy', $g->id) }}" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Konfirmasi Hapus Data . !!')">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger delete-confirm">
                                        <i class="fas fa-trash"></i>Hapus
                                    </button>
                                </form> 
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mx-3 my-3">
                {{-- {{ $bimbinganSkripsi->appends($_GET)->links() }} --}}
            </div>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
