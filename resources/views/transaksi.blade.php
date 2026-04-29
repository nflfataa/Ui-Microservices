@extends('layouts.app')

@section('content')
    <div class="p-8 h-full overflow-y-auto custom-scrollbar bg-slate-50/50">
        <div class="max-w-7xl mx-auto">

            <div class="mb-8">
                <h1 class="text-2xl font-bold text-slate-800">Keranjang Pesanan</h1>
                <p class="text-slate-500 mt-1">Periksa kembali pesanan Anda sebelum melakukan pembayaran</p>
            </div>

            <div class="flex flex-col lg:flex-row gap-6 items-start">

                <div class="flex-1 w-full bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="p-5 border-b border-slate-100 flex justify-between items-center bg-white">
                        <h2 class="font-bold text-slate-800">Item Tersimpan (2)</h2>
                        <button
                            class="text-sm font-medium text-rose-500 hover:text-rose-600 hover:bg-rose-50 px-3 py-1.5 rounded-lg transition">Kosongkan
                            Keranjang</button>
                    </div>

                    <div class="p-6 space-y-2">

                        <div
                            class="flex flex-col sm:flex-row justify-between items-start sm:items-center p-4 border border-slate-100 rounded-2xl hover:border-emerald-200 hover:bg-emerald-50/30 transition-all gap-4 group">
                            <div class="flex items-center gap-4 flex-1">
                                <div
                                    class="w-14 h-14 bg-slate-50 rounded-xl flex items-center justify-center text-slate-300 shrink-0 group-hover:bg-white group-hover:text-emerald-500 transition-colors border border-slate-100">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800">Amoxicillin 500mg</h4>
                                    <p class="text-sm text-emerald-600 font-medium mt-0.5">Rp 12.000</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-6 w-full sm:w-auto justify-between sm:justify-end">
                                <div
                                    class="flex items-center border border-slate-200 rounded-lg overflow-hidden bg-white shadow-sm">
                                    <button
                                        class="px-3 py-1.5 text-slate-500 hover:bg-slate-100 hover:text-emerald-600 transition font-bold">-</button>
                                    <span
                                        class="px-3 text-sm font-semibold text-slate-700 min-w-[32px] text-center">2</span>
                                    <button
                                        class="px-3 py-1.5 text-slate-500 hover:bg-slate-100 hover:text-emerald-600 transition font-bold">+</button>
                                </div>
                                <div class="font-bold text-slate-800 w-24 text-right text-lg">Rp 24.000</div>
                                <button
                                    class="text-slate-300 hover:text-rose-500 transition p-2 hover:bg-rose-50 rounded-lg"
                                    title="Hapus Item">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div
                            class="flex flex-col sm:flex-row justify-between items-start sm:items-center p-4 border border-slate-100 rounded-2xl hover:border-emerald-200 hover:bg-emerald-50/30 transition-all gap-4 group">
                            <div class="flex items-center gap-4 flex-1">
                                <div
                                    class="w-14 h-14 bg-slate-50 rounded-xl flex items-center justify-center text-slate-300 shrink-0 group-hover:bg-white group-hover:text-emerald-500 transition-colors border border-slate-100">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800">Paracetamol 500mg</h4>
                                    <p class="text-sm text-emerald-600 font-medium mt-0.5">Rp 5.000</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-6 w-full sm:w-auto justify-between sm:justify-end">
                                <div
                                    class="flex items-center border border-slate-200 rounded-lg overflow-hidden bg-white shadow-sm">
                                    <button
                                        class="px-3 py-1.5 text-slate-500 hover:bg-slate-100 hover:text-emerald-600 transition font-bold">-</button>
                                    <span
                                        class="px-3 text-sm font-semibold text-slate-700 min-w-[32px] text-center">1</span>
                                    <button
                                        class="px-3 py-1.5 text-slate-500 hover:bg-slate-100 hover:text-emerald-600 transition font-bold">+</button>
                                </div>
                                <div class="font-bold text-slate-800 w-24 text-right text-lg">Rp 5.000</div>
                                <button
                                    class="text-slate-300 hover:text-rose-500 transition p-2 hover:bg-rose-50 rounded-lg"
                                    title="Hapus Item">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="w-full lg:w-[400px] shrink-0">
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden sticky top-8">

                        <div
                            class="p-6 bg-emerald-600 text-white flex justify-between items-center relative overflow-hidden">
                            <div class="absolute -right-6 -top-6 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                            <div class="relative z-10">
                                <h2 class="text-xl font-bold leading-none mb-1.5">Ringkasan Pesanan</h2>
                                <p class="text-emerald-100/90 text-sm font-medium mt-1">
                                    {{ \Carbon\Carbon::now()->locale('id')->isoFormat('D MMMM Y') }}
                                </p>
                            </div>
                        </div>

                        <div class="p-6 bg-white space-y-4">
                            <div class="flex justify-between text-sm text-slate-500">
                                <span>Subtotal (3 Obat)</span>
                                <span class="font-medium text-slate-700">Rp 29.000</span>
                            </div>
                            <div class="flex justify-between text-sm text-slate-500">
                                <span>Diskon Promo</span>
                                <span class="font-medium text-emerald-600">- Rp 0</span>
                            </div>
                            <div class="pt-4 border-t border-slate-100 flex justify-between items-end">
                                <span class="text-sm font-medium text-slate-500">Total Tagihan</span>
                                <span class="text-3xl font-black text-emerald-600">Rp 29.000</span>
                            </div>
                        </div>

                        <div class="p-6 bg-slate-50 border-t border-slate-100">
                            <button
                                class="w-full py-4 bg-emerald-600 text-white rounded-xl font-bold text-lg hover:bg-emerald-700 transition shadow-lg shadow-emerald-200/50 flex items-center justify-center gap-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                                Lanjut Pembayaran
                            </button>
                            <p class="text-center text-[11px] text-slate-400 mt-4">
                                Transaksi aman & terenkripsi oleh MedTech.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection