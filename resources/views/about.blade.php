@extends('Dashboard.Dashboard')

@section('main')
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body text-center">
                <img src="" alt="Foto Profil" class="rounded-circle mb-3" width="120" height="120">
                <h3 class="card-title">Nama: I Gusti Ngurah Artha Peradipta</h3>
                <h3 class="card-title">NIM: 2355201006</h3>
                <p class="card-text">
                    Email: gmail@example.com
                </p>
            </div>
        </div>
        <div class="mt-3 text-center">
            <a href="{{ url('/dashboard') }}" class="btn btn-primary">Balik ke Dashboard</a>
        </div>
    </div>
@endsection
