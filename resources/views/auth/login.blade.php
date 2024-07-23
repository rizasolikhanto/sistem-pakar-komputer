@extends('front.app')
@section('title', 'Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi')
@section('content')
<div class="container">
    <div class="masthead row justify-content-center">
        <div class="card o-hidden col-lg-4 mb-5">
            <div class="row">
                <div class="col-md">
                    <div class="p-4">
                        <h2 class="mb-3 text-center">Silahkan Login!</h1>
                        <div class="auth-logo text-center mb-4">
                            <img src="{{ asset('assets/logo.png') }}" width="200px">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control form-control-rounded @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" autofocus>
                                @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" id="password" type="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}