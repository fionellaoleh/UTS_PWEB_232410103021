@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="page-header text-center">
    <div class="container">
        <h1><strong> Selamat Datang, {{ $username }}!</strong></h1>
        <p class="lead">Di Portal UKM Kerohanian Kristen Universitas Jember</p>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    Kegiatan Mendatang
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card activity-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Gather and Pray</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Sabtu, 10 Mei 2025</h6>
                                    <p class="card-text">Tema : Staring From Zero Together We Can</p>
                                    <p class="card-text">Tempat : LT.5 Pascasarjana Fakultas Hukum </p>
                                    <p class="card-text">FIB x Fasilkom x FMIPA x FISIP</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card activity-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Retreat Tahunan</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">20-22 Juni 2025</h6>
                                    <p class="card-text">Retreat tahunan untuk mengeratkan persaudaraan di Bromo Camp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-3">
                            <a href="{{ route('pengelolaan') }}" class="btn btn-primary">Lihat Semua Kegiatan</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    Berita & Pengumuman
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h5>Pendaftaran Anggota Baru Tahun 2025</h5>
                        <p class="text-muted">Diposting: 1 Mei 2025</p>
                        <p>Pendaftaran anggota baru UKM Kerohanian Kristen UNEJ telah dibuka! Ayo bergabung dan kembangkan iman dan talentamu bersama kami.</p>
                    </div>
                    <div class="mb-4">
                        <h5>Hasil Pemilihan Pengurus Periode 2025-2026</h5>
                        <p class="text-muted">Diposting: 25 April 2025</p>
                        <p>Selamat kepada pengurus baru UKM Kerohanian Kristen UNEJ periode 2025-2026. Mari bersama membangun UKM kita menjadi lebih baik!</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    Ayat Hari Ini
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>"Sebab itu janganlah kamu kuatir akan hari besok, karena hari besok mempunyai kesusahannya sendiri. Kesusahan sehari cukuplah untuk sehari."</p>
                        <footer class="blockquote-footer">Matius 6:34</footer>
                    </blockquote>
                </div>
            </div>
            
            <div class="card mb-4">
                <div class="card-header">
                    Statistik UKM
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <span>Jumlah Anggota:</span>
                        <span class="fw-bold">45 Mahasiswa</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Kegiatan Rutin:</span>
                        <span class="fw-bold">5 Kegiatan</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Tahun Berdiri:</span>
                        <span class="fw-bold">1995</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Fakultas Anggota:</span>
                        <span class="fw-bold">15 Fakultas</span>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    Info Kontak
                </div>
                <div class="card-body">
                    <p><strong>Email:</strong> {{ $profileData['kontak']['email'] }}</p>
                    <p><strong>Telepon:</strong> {{ $profileData['kontak']['telepon'] }}</p>
                    <p><strong>Instagram:</strong> {{ $profileData['kontak']['instagram'] }}</p>
                    <p><strong>Alamat:</strong> {{ $profileData['kontak']['alamat'] }}</p>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
