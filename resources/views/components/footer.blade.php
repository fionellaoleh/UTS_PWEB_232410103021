<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>UKM Kerohanian Kristen</h5>
                <p>Universitas Jember</p>
                <p>Est. 1995</p>
            </div>
            <div class="col-md-4">
                <h5>Kontak</h5>
                <p>Email: {{ $profileData['kontak']['email'] }}</p>
                <p>Telp: {{ $profileData['kontak']['telepon'] }}</p>
                <p>Instagram: {{ $profileData['kontak']['instagram'] }}</p>
            </div>
            <div class="col-md-4">
                <h5>Lokasi</h5>
                <p>{{ $profileData['kontak']['alamat'] }}</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <p class="mb-0">&copy; {{ date('Y') }} UKM Kerohanian Kristen Universitas Jember. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
