@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="page-header text-center">
    <div class="container">
        <h1>Profile UKM</h1>
        <p class="lead">Selamat Datang, {{ $username ?? 'Tamu' }}!</p>
    </div>
</div>

<div class="container">
    <div class="row">
        {{-- Tentang UKM --}}
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    Tentang UKM
                </div>
                <div class="card-body">
                    @if(isset($profileData) && is_array($profileData))
                        <h5 class="card-title">{{ $profileData['nama'] ?? 'UKM Kerohanian Kristen' }}</h5>
                        <p class="card-text"><strong>Tahun Berdiri:</strong> {{ $profileData['tahun_berdiri'] ?? '-' }}</p>
                        <p class="card-text"><strong>Jumlah Anggota:</strong> {{ $profileData['jumlah_anggota'] ?? '45' }} Mahasiswa</p>
                    @else
                        <p>Data profil tidak tersedia</p>
                    @endif
                </div>
            </div>
        </div>

        {{-- Visi & Misi --}}
        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-header">
                    Visi & Misi
                </div>
                <div class="card-body">
                    <h5>Visi</h5>
                    @if(isset($profileData) && isset($profileData['visi']))
                        <p class="card-text">{{ $profileData['visi'] }}</p>
                    @else
                        <p class="card-text">Visi belum tersedia</p>
                    @endif

                    <h5 class="mt-4">Misi</h5>
                    <ul class="list-group list-group-flush">
                        @if(isset($profileData) && isset($profileData['misi']) && is_array($profileData['misi']) && count($profileData['misi']) > 0)
                            @foreach($profileData['misi'] as $misi)
                                <li class="list-group-item bg-transparent">{{ $misi }}</li>
                            @endforeach
                        @else
                            <li class="list-group-item bg-transparent">Misi belum tersedia</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        {{-- Kontak --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Informasi Kontak
                </div>
                <div class="card-body">
                    <div class="row">
                        @php
                            $kontak = isset($profileData) && isset($profileData['kontak']) ? $profileData['kontak'] : [];
                        @endphp
                        <div class="col-md-6">
                            <p><strong>Email:</strong> {{ $kontak['email'] ?? '-' }}</p>
                            <p><strong>Telepon:</strong> {{ $kontak['telepon'] ?? '-' }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Instagram:</strong> {{ $kontak['instagram'] ?? '-' }}</p>
                            <p><strong>Alamat:</strong> {{ $kontak['alamat'] ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection