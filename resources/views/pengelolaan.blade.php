@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<div class="page-header text-center">
    <div class="container">
        <h1 class="fw-bold">Pengelolaan UKM</h1>
        <p class="lead">Daftar Kegiatan dan Pengurus UKM Kerohanian Kristen</p>
    </div>
</div>

<div class="container">
    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="kegiatan-tab" data-bs-toggle="tab" data-bs-target="#kegiatan" 
                    type="button" role="tab" aria-controls="kegiatan" aria-selected="true">Daftar Kegiatan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pengurus-tab" data-bs-toggle="tab" data-bs-target="#pengurus" 
                    type="button" role="tab" aria-controls="pengurus" aria-selected="false">Daftar Pengurus</button>
        </li>
    </ul>
    
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="kegiatan" role="tabpanel" aria-labelledby="kegiatan-tab">
            <div class="row">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Kegiatan Baru</h5>
                        <form action="{{ route('kegiatan.store') }}" method="POST">
                            @csrf
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Kegiatan" required>
                                </div>
                                <div class="col">
                                    <input type="date" name="tanggal" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-2">
                                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi" required>
                            </div>
                            <div class="mb-2">
                                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi (Opsional)">
                            </div>
                            <div class="mb-2">
                                <input type="text" name="koordinator" class="form-control" placeholder="Koordinator" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
                
                @foreach($kegiatanList as $kegiatan)
                <div class="col-md-6 mb-4">
                    <div class="card activity-card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $kegiatan['nama'] }}</strong></h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $kegiatan['tanggal'] }}</h6>
                            <p class="card-text"><strong>Lokasi:</strong> {{ $kegiatan['lokasi'] }}</p>
                            <p class="card-text">{{ $kegiatan['deskripsi'] }}</p>
                            <p class="card-text"><strong>Koordinator:</strong> {{ $kegiatan['koordinator'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="tab-pane fade" id="pengurus" role="tabpanel" aria-labelledby="pengurus-tab">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Fakultas</th>
                            <th>Angkatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengurusList as $index => $pengurus)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $pengurus['nama'] }}</td>
                            <td>{{ $pengurus['jabatan'] }}</td>
                            <td>{{ $pengurus['fakultas'] }}</td>
                            <td>{{ $pengurus['angkatan'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
