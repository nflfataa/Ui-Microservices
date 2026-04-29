<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Pastikan user sudah login (punya token)
        if (!session()->has('api_token')) {
            return redirect('/login')->withErrors(['login_error' => 'Sesi berakhir, silakan login.']);
        }

        $token = session('api_token');
        $role = session('user_role');

        // 2. Siapkan variabel default
        $orders = [];
        $totalPesanan = 0;

        // 3. Tembak API Order Service
        $orderApiUrl = env('ORDER_SERVICE_URL') . '/orders';

        try {
            // Kita bawa token agar Order Service tahu siapa yang merequest
            $response = Http::withToken($token)->get($orderApiUrl);

            if ($response->successful()) {
                // Asumsi Order Service mengembalikan data dalam format JSON standar Laravel
                // Sesuaikan 'data' dengan struktur JSON dari OrderController@index milikmu
                $orders = $response->json('data') ?? $response->json();
                $totalPesanan = count($orders);
            }
        } catch (\Exception $e) {
            // Tangani jika Order Service sedang mati (down)
            // Bisa menggunakan session flash untuk menampilkan peringatan di UI
            session()->flash('warning', 'Layanan pesanan sedang gangguan.');
        }

        // 4. Kirim data pesanan ke Blade
        return view('dashboard', compact('orders', 'totalPesanan'));
    }
}
da