<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Tamu!');

        $profileData = [
            'kontak' => [
                'email' => 'ukmkerohaniankristen2025j@gmail.com',
                'telepon' => '081260747195',
                'instagram' => '@ukmkk.unej',
                'alamat' => 'Jl. Kalimantan 35 Kompleks Gedung PKM Universitas Jember'
            ]
        ];

    return view('dashboard', compact('username', 'profileData'));
    }

    public function pengelolaan()
    {
        $kegiatanList = [
            [
                'id' => 1,
                'nama' => 'Ibadah POMKRIS',
                'tanggal' => '09 Mei 2025',
                'lokasi' => 'Lt. 5 Pascasarjana Fak. Hukum',
                'deskripsi' => 'Whispers of Faith',
                'koordinator' => 'Bidang Kerohanian'
            ],
            [
                'id' => 2,
                'nama' => 'Gather And Pray',
                'tanggal' => '10 Mei 2025',
                'lokasi' => 'Lt. 5 Pascasarjana Fak. Hukum',
                'deskripsi' => 'FIB x FASILKOM x FMIPA x FISIP',
                'koordinator' => 'Bidang Kerohanian'
            ],
            [
                'id' => 3,
                'nama' => 'Ibadah Pomkris',
                'tanggal' => '16 Mei 2025',
                'lokasi' => 'Gedung Auditorium Universitas Jember',
                'deskripsi' => '',
                'koordinator' => 'Bidang Kerohanian'
            ],
            [
                'id' => 4,
                'nama' => 'Seminar Mental Health',
                'tanggal' => '17 Mei 2025',
                'lokasi' => 'Gedung Soerachman Universitas Jember',
                'deskripsi' => 'Recognizing the Hidden Signs of Depression Among Student',
                'koordinator' => 'Bidang Litbang'
            ],
        ];
        
        $pengurusList = [
            [
                'id' => 1,
                'nama' => 'Aydo Romualdo Pardosi',
                'jabatan' => 'Ketua UKM',
                'fakultas' => 'Fakultas Hukum',
                'angkatan' => '2022'
            ],
            [
                'id' => 2,
                'nama' => 'Elsa Lestari Hutahean',
                'jabatan' => 'Wakil Ketua',
                'fakultas' => 'Fakultas Hukum',
                'angkatan' => '2022'
            ],
            [
                'id' => 3,
                'nama' => 'Jennifer Anisa Turnip',
                'jabatan' => 'Sekretaris',
                'fakultas' => 'Fakultas Hukum',
                'angkatan' => '2022'
            ],
            [
                'id' => 4,
                'nama' => 'Fionella Vernanda Putri Anderson Oleh',
                'jabatan' => 'Kepala Bidang Media Kreatif',
                'fakultas' => 'Fakultas Ilmu Komputer',
                'angkatan' => '2023'
            ],
            [
                'id' => 5,
                'nama' => 'Sulis Gertrudis Ramos',
                'jabatan' => 'Kepala Bidang Humas',
                'fakultas' => 'Fakultas Ilmu Komputer',
                'angkatan' => '2023'
            ],
        ];
        
        return view('pengelolaan', compact('kegiatanList', 'pengurusList'));
    }


    public function storeKegiatan(Request $request)
    {
        $kegiatanBaru = [
            'id' => time(), // atau pakai UUID
            'nama' => $request->input('nama'),
            'tanggal' => $request->input('tanggal'),
            'lokasi' => $request->input('lokasi'),
            'deskripsi' => $request->input('deskripsi'),
            'koordinator' => $request->input('koordinator')
        ];

        // Simpan sementara ke session (karena belum database)
        $kegiatanList = session('kegiatanList', []);
        $kegiatanList[] = $kegiatanBaru;
        session(['kegiatanList' => $kegiatanList]);

        return redirect()->back()->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    public function profile(Request $request)
    {
        // Mendapatkan username dari query parameter atau default ke 'Tamu'
        $username = $request->query('username', 'Tamu');
        
        // Data profil yang akan digunakan di view
        $profileData = [
            'nama' => 'UKM Kerohanian Kristen',
            'tahun_berdiri' => '1995',
            'jumlah_anggota' => '120',
            'visi' => 'Menjadi wadah persekutuan yang membentuk karakter Kristiani mahasiswa Universitas Jember',
            'misi' => [
                'Menyelenggarakan ibadah dan kegiatan rohani secara rutin',
                'Membina mahasiswa dalam iman dan karakter Kristiani',
                'Membangun persaudaraan antar mahasiswa Kristen',
                'Berperan aktif dalam pengabdian masyarakat'
            ],
            'kontak' => [
                'email' => 'ukmkerohaniankristen2025j@gmail.com',
                'telepon' => '081260747195',
                'instagram' => '@ukmkk.unej',
                'alamat' => 'Jl. Kalimantan 35 Kompleks Gedung PKM Universitas Jember'
            ]
        ];
        
        // Untuk debugging - uncomment jika perlu
        // dd($profileData);
        
        // Mengirim data ke view
        return view('profile', [
            'username' => $username,
            'profileData' => $profileData
        ]);
        
        // Alternatif menggunakan compact:
        // return view('profile', compact('username', 'profileData'));
    }

}

