@extends('layouts.app')

@section('content')
    <div class="flex-1 flex flex-col p-6 h-full min-h-0 bg-slate-100/50">

        <div class="mb-4 shrink-0">
            <h1 class="text-2xl font-bold text-slate-800">Point of Sales</h1>
            <p class="text-slate-500 mt-1">Sistem kasir dan transaksi apotek</p>
        </div>

        <div class="flex-1 flex gap-6 min-h-0">

            <div class="flex-1 flex flex-col bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-4 border-b border-slate-100 bg-white z-10 shrink-0">
                    <div class="relative">
                        <input type="text" placeholder="Scan barcode atau cari nama obat..."
                            class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-slate-50 border border-slate-200 focus:bg-white focus:ring-2 focus:ring-emerald-500 font-medium outline-none transition-all">
                        <svg class="w-6 h-6 text-slate-400 absolute left-3 top-3.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <div
                    class="p-4 overflow-y-auto custom-scrollbar grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 content-start flex-1 bg-slate-50/50">

                    <div
                        class="bg-white border border-slate-200 rounded-xl p-4 cursor-pointer hover:border-emerald-500 hover:shadow-md transition-all group">
                        <div
                            class="h-24 bg-slate-50 rounded-lg mb-3 flex items-center justify-center text-slate-300 group-hover:bg-emerald-50 group-hover:text-emerald-500 transition-colors">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-medium text-slate-800 truncate">Paracetamol 500mg</h4>
                        <p class="text-sm text-emerald-600 font-bold mt-1">Rp 5.000</p>
                        <p class="text-xs text-slate-400 mt-1">Stok: 124</p>
                    </div>

                    <div
                        class="bg-white border border-slate-200 rounded-xl p-4 cursor-pointer hover:border-emerald-500 hover:shadow-md transition-all group">
                        <div
                            class="h-24 bg-slate-50 rounded-lg mb-3 flex items-center justify-center text-slate-300 group-hover:bg-emerald-50 group-hover:text-emerald-500 transition-colors">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-medium text-slate-800 truncate">Amoxicillin 500mg</h4>
                        <p class="text-sm text-emerald-600 font-bold mt-1">Rp 12.000</p>
                        <p class="text-xs text-slate-400 mt-1">Stok: 45</p>
                    </div>

                    <div
                        class="bg-white border border-slate-200 rounded-xl p-4 cursor-pointer hover:border-emerald-500 hover:shadow-md transition-all group">
                        <div
                            class="h-24 bg-slate-50 rounded-lg mb-3 flex items-center justify-center text-slate-300 group-hover:bg-emerald-50 group-hover:text-emerald-500 transition-colors">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-medium text-slate-800 truncate">OBH Combi Plus</h4>
                        <p class="text-sm text-emerald-600 font-bold mt-1">Rp 18.500</p>
                        <p class="text-xs text-slate-400 mt-1">Stok: 8</p>
                    </div>
                </div>
            </div>

            <div
                class="w-[400px] shrink-0 flex flex-col bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden relative">
                <div class="p-5 bg-emerald-600 text-white flex justify-between items-center shrink-0">
                    <div>
                        <h2 class="text-lg font-bold leading-none">Keranjang Pesanan</h2>
                        <p class="text-emerald-100 text-sm mt-1">#INV-{{ date('Ymd') }}-001</p>
                    </div>
                    <button
                        class="w-8 h-8 rounded-lg bg-emerald-500 hover:bg-emerald-400 flex items-center justify-center transition"
                        title="Kosongkan Keranjang">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                            </path>
                        </svg>
                    </button>
                </div>

                <div class="flex-1 overflow-y-auto custom-scrollbar p-5 space-y-5">

                    <div class="flex justify-between items-start pb-4 border-b border-slate-100">
                        <div class="flex-1 pr-4">
                            <h4 class="font-semibold text-slate-800 text-sm">Amoxicillin 500mg</h4>
                            <p class="text-xs text-slate-500 mt-1">Rp 12.000</p>
                        </div>
                        <div class="flex flex-col items-end gap-2">
                            <div class="font-bold text-slate-800 text-sm">Rp 24.000</div>
                            <div class="flex items-center border border-slate-200 rounded-lg overflow-hidden bg-white">
                                <button
                                    class="px-2.5 py-1 text-slate-500 hover:bg-slate-100 hover:text-emerald-600 transition">-</button>
                                <span class="px-2 text-sm font-semibold text-slate-700 .min-w-[24px] text-center">2</span>
                                <button
                                    class="px-2.5 py-1 text-slate-500 hover:bg-slate-100 hover:text-emerald-600 transition">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between items-start pb-4 border-b border-slate-100">
                        <div class="flex-1 pr-4">
                            <h4 class="font-semibold text-slate-800 text-sm">Paracetamol 500mg</h4>
                            <p class="text-xs text-slate-500 mt-1">Rp 5.000</p>
                        </div>
                        <div class="flex flex-col items-end gap-2">
                            <div class="font-bold text-slate-800 text-sm">Rp 5.000</div>
                            <div class="flex items-center border border-slate-200 rounded-lg overflow-hidden bg-white">
                                <button
                                    class="px-2.5 py-1 text-slate-500 hover:bg-slate-100 hover:text-emerald-600 transition">-</button>
                                <span class="px-2 text-sm font-semibold text-slate-700 .min-w-[24px] text-center">1</span>
                                <button
                                    class="px-2.5 py-1 text-slate-500 hover:bg-slate-100 hover:text-emerald-600 transition">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6 bg-slate-50 border-t border-slate-200 shrink-0">
                    <div class="space-y-3 mb-5">
                        <div class="flex justify-between text-sm text-slate-500">
                            <span>Subtotal</span>
                            <span class="font-medium text-slate-700">Rp 29.000</span>
                        </div>
                        <div class="flex justify-between text-sm text-slate-500">
                            <span>Diskon</span>
                            <span class="font-medium text-emerald-600">- Rp 0</span>
                        </div>
                        <div class="flex justify-between items-end pt-3 border-t border-slate-200">
                            <span class="text-sm font-medium text-slate-500">Total Tagihan</span>
                            <span class="text-3xl font-black text-emerald-600">Rp 29.000</span>
                        </div>
                    </div>

                    <button
                        class="w-full py-4 bg-emerald-600 text-white rounded-xl font-bold text-lg hover:bg-emerald-700 transition shadow-lg shadow-emerald-200/50 flex items-center justify-center gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        Bayar Sekarang
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection