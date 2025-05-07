<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
use Illuminate\Support\Facades\View;

{
    View::composer('*', function ($view) {
        $profileData = [
            'kontak' => [
                'email' => 'ukmkerohaniankristen2025j@gmail.com',
                'telepon' => '081260747195',
                'instagram' => '@ukmkk.unej',
                'alamat' => 'Jl. Kalimantan 35 Kompleks Gedung PKM Universitas Jember'
            ]
        ];
        $view->with('profileData', $profileData);
    });
}
