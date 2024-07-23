@extends('front.app')
@section('title', 'Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi')
@section('content')
<div class="container">
    <div class="masthead row justify-content-center">
        <div class="card o-hidden col-lg-6 mb-5">
            <div class="row">
                <div class="col-md">
                    <div class="p-4">
                        <h2 class="mb-3 text-center">Hasil Diagnosa Kerusakan Komputer Anda!</h1>
                        <p>Komputer anda mengalami kerusakan {{$results->damages->kerusakan}}</p>
                        
                        
                        {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est nihil quaerat quibusdam, omnis at deserunt officia sit, nisi dolorem reprehenderit dignissimos atque quidem libero veritatis pariatur beatae. Ab, esse magnam!</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
