@extends('layouts.app')

@section('content')
    <div class="p-8 h-full overflow-y-auto custom-scrollbar">
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-slate-800">Katalog Obat</h1>
                    <p class="text-slate-500 mt-1">Kelola inventaris dan stok obat apotek</p>
                </div>
                <button
                    class="px-5 py-2.5 bg-emerald-600 text-white rounded-xl font-medium hover:bg-emerald-700 transition shadow-lg shadow-emerald-200 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Obat Baru
                </button>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-5 border-b border-slate-100 flex gap-4">
                    <input type="text" placeholder="Cari nama atau kode obat..."
                        class="flex-1 px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-sm outline-none transition-all">
                    <select
                        class="px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-sm text-slate-600 outline-none transition-all">
                        <option>Semua Kategori</option>
                        <option>Tablet</option>
                        <option>Sirup</option>
                        <option>Kapsul</option>
                        <option>Salep</option>
                    </select>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-sm">
                                <th class="px-6 py-4 font-medium">Nama Obat</th>
                                <th class="px-6 py-4 font-medium">Kategori</th>
                                <th class="px-6 py-4 font-medium">Harga Jual</th>
                                <th class="px-6 py-4 font-medium">Stok</th>
                                <th class="px-6 py-4 font-medium">Expired Date</th>
                                <th class="px-6 py-4 font-medium text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-800">Paracetamol 500mg</td>
                                <td class="px-6 py-4"><span
                                        class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-medium">Tablet</span>
                                </td>
                                <td class="px-6 py-4">Rp 5.000</td>
                                <td class="px-6 py-4 text-emerald-600 font-medium">124</td>
                                <td class="px-6 py-4">12 Oct 2026</td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-emerald-600 hover:text-emerald-800 mr-3 font-medium">Edit</button>
                                    <button class="text-rose-600 hover:text-rose-800 font-medium">Hapus</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-800">Amoxicillin 500mg</td>
                                <td class="px-6 py-4"><span
                                        class="px-3 py-1 bg-amber-50 text-amber-600 rounded-full text-xs font-medium">Kapsul</span>
                                </td>
                                <td class="px-6 py-4">Rp 12.000</td>
                                <td class="px-6 py-4 text-emerald-600 font-medium">45</td>
                                <td class="px-6 py-4">05 Jan 2027</td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-emerald-600 hover:text-emerald-800 mr-3 font-medium">Edit</button>
                                    <button class="text-rose-600 hover:text-rose-800 font-medium">Hapus</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-800">OBH Combi Plus 100ml</td>
                                <td class="px-6 py-4"><span
                                        class="px-3 py-1 bg-rose-50 text-rose-600 rounded-full text-xs font-medium">Sirup</span>
                                </td>
                                <td class="px-6 py-4">Rp 18.500</td>
                                <td class="px-6 py-4 text-rose-600 font-medium">8 <span
                                        class="text-xs text-rose-400 ml-1">(Low)</span></td>
                                <td class="px-6 py-4">20 Nov 2025</td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-emerald-600 hover:text-emerald-800 mr-3 font-medium">Edit</button>
                                    <button class="text-rose-600 hover:text-rose-800 font-medium">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="p-4 border-t border-slate-100 flex items-center justify-between text-sm text-slate-500">
                    <span>Menampilkan 1-3 dari 1,245 obat</span>
                    <div class="flex gap-2">
                        <button class="px-3 py-1 border border-slate-200 rounded hover:bg-slate-50 transition">Prev</button>
                        <button
                            class="px-3 py-1 bg-emerald-50 text-emerald-600 border border-emerald-100 rounded font-medium">1</button>
                        <button class="px-3 py-1 border border-slate-200 rounded hover:bg-slate-50 transition">2</button>
                        <button class="px-3 py-1 border border-slate-200 rounded hover:bg-slate-50 transition">Next</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection