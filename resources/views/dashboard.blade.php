@extends('layouts.app')

@section('content')
    <div class="p-8 h-full overflow-y-auto custom-scrollbar">
        <div class="max-w-7xl mx-auto">

            <div class="mb-8">
                <h1 class="text-2xl font-bold text-slate-800">Overview Hari Ini</h1>
                <p class="text-slate-500 mt-1">Ringkasan aktivitas apotek tanggal {{ date('d M Y') }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 font-medium">Penjualan Hari Ini</p>
                        <h3 class="text-2xl font-bold text-slate-800 mt-1">Rp 4.5M</h3>
                    </div>
                </div>
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 font-medium">Total Obat</p>
                        <h3 class="text-2xl font-bold text-slate-800 mt-1">1,245</h3>
                    </div>
                </div>
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-rose-100 text-rose-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 font-medium">Obat Hampir Habis</p>
                        <h3 class="text-2xl font-bold text-slate-800 mt-1">12</h3>
                    </div>
                </div>
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 font-medium">Total Transaksi</p>
                        <h3 class="text-2xl font-bold text-slate-800 mt-1">86</h3>
                    </div>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 mb-8 h-80 flex flex-col justify-center items-center relative overflow-hidden">
                <div class="absolute top-6 left-6 font-semibold text-slate-700">Grafik Penjualan Mingguan</div>
                <div class="text-slate-400 flex items-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                    </svg>
                    [ Area Integrasi Chart.js / ApexCharts ]
                </div>
            </div>

        </div>
    </div>
@endsection