@extends('layouts.app')

@section('content')
    <div class="p-8 h-full overflow-y-auto custom-scrollbar relative">
        <div class="max-w-7xl mx-auto">

            {{-- HEADER AREA --}}
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-slate-800">Katalog Produk Kesehatan</h1>
                    <p class="text-slate-500 mt-1">Pilih dan kelola kebutuhan obat dan vitamin di sini</p>
                </div>

                <div class="flex items-center gap-3">
                    {{-- TOMBOL KHUSUS ADMIN: Memicu Modal Tambah Obat --}}
                    @if(session('user_role') == 'admin')
                        <button onclick="document.getElementById('modalTambahObat').classList.remove('hidden')"
                            class="px-5 py-2.5 bg-emerald-600 text-white rounded-xl font-medium hover:bg-emerald-700 transition shadow-lg shadow-emerald-200 flex items-center gap-2 relative">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            Tambah Obat
                        </button>
                    @endif

                    {{-- TOMBOL KERANJANG --}}
                    <a href="/transaksi"
                        class="px-5 py-2.5 bg-emerald-600 text-white rounded-xl font-medium hover:bg-emerald-700 transition shadow-lg shadow-emerald-200 flex items-center gap-2 relative">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        Keranjang Saya
                    </a>
                </div>
            </div>

            {{-- NOTIFIKASI ERROR/WARNING --}}
            @if(session('warning'))
                <div
                    class="mb-6 p-4 rounded-xl bg-amber-50 text-amber-700 text-sm border border-amber-200 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                        </path>
                    </svg>
                    {{ session('warning') }}
                </div>
            @endif

            {{-- BLOK PESAN SUKSES --}}
            @if(session('success'))
                <div
                    class="mb-6 p-4 rounded-xl bg-emerald-50 text-emerald-700 text-sm border border-emerald-200 flex items-center gap-2 shadow-sm">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    {{ session('success') }}
                </div>
            @endif

            {{-- FORM PENCARIAN --}}
            <form action="/obat" method="GET"
                class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5 mb-6 flex gap-4 items-center">
                <div class="flex-1 relative">
                    <div
                        class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400 font-bold">
                        ID:
                    </div>
                    <input type="number" name="search_id" value="{{ request('search_id') }}"
                        placeholder="Contoh: 1, 2, 3..."
                        class="w-full pl-10 pr-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-sm outline-none transition-all">
                </div>

                <button type="submit"
                    class="px-6 py-2 bg-emerald-600 text-white rounded-lg font-medium hover:bg-emerald-700 transition shadow-md">
                    Cari ID
                </button>

                @if(request('search_id'))
                    <a href="/obat"
                        class="px-4 py-2 bg-slate-100 text-slate-600 rounded-lg font-medium hover:bg-slate-200 transition">
                        Reset
                    </a>
                @endif
            </form>

            {{-- GRID DATA OBAT --}}
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                @forelse($obatList as $obat)
                    <div
                        class="bg-white border border-slate-200 rounded-2xl p-4 hover:border-emerald-500 hover:shadow-md transition-all group flex flex-col relative overflow-hidden">

                        @if(!empty($obat['category']))
                            <div
                                class="absolute top-2 left-2 px-2 py-0.5 bg-slate-800/80 text-white text-[10px] font-bold uppercase rounded-md z-10 backdrop-blur-sm">
                                {{ $obat['category'] }}
                            </div>
                        @endif

                        <div
                            class="h-32 bg-slate-50 rounded-xl mb-3 flex items-center justify-center text-slate-300 group-hover:bg-emerald-50 group-hover:text-emerald-500 transition-colors">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <h4 class="font-medium text-slate-800 line-clamp-2 leading-tight">
                                {{ $obat['name'] ?? 'Produk Tanpa Nama' }}
                            </h4>
                            <p
                                class="text-xs {{ ($obat['stock'] ?? 0) <= 5 ? 'text-rose-500 font-bold' : 'text-slate-400' }} mt-1">
                                Stok: {{ $obat['stock'] ?? 0 }}
                            </p>
                        </div>

                        <div class="mt-4 flex flex-col gap-3">
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-emerald-600 font-bold">
                                    Rp {{ number_format($obat['price'] ?? 0, 0, ',', '.') }}
                                </p>

                                {{-- Tombol Keranjang hanya untuk User --}}
                                @if(session('user_role') != 'admin')
                                    <button
                                        class="w-8 h-8 rounded-lg bg-slate-50 text-slate-500 hover:bg-emerald-500 hover:text-white flex items-center justify-center transition-colors {{ ($obat['stock'] ?? 0) <= 0 ? 'opacity-50 cursor-not-allowed hover:bg-slate-50 hover:text-slate-500' : '' }}"
                                        title="Tambah ke Keranjang" {{ ($obat['stock'] ?? 0) <= 0 ? 'disabled' : '' }}>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4"></path>
                                        </svg>
                                    </button>
                                @endif
                            </div>

                            {{-- AKSI ADMIN: TOMBOL EDIT & HAPUS --}}
                            @if(session('user_role') == 'admin')
                                <div class="flex items-center gap-2 pt-3 border-t border-slate-100">
                                    <button type="button" data-obat="{{ json_encode($obat) }}" onclick="openEditModal(this)"
                                        class="flex-1 text-xs px-3 py-1.5 text-blue-600 bg-blue-50 hover:bg-blue-600 hover:text-white rounded-lg font-medium transition text-center">
                                        Edit
                                    </button>

                                    <form action="/obat/{{ $obat['id'] ?? '' }}/destroy" method="POST" class="flex-1"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus {{ $obat['name'] ?? 'obat ini' }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="w-full text-xs px-3 py-1.5 text-rose-600 bg-rose-50 hover:bg-rose-600 hover:text-white rounded-lg font-medium transition text-center">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>

                @empty
                    <div
                        class="col-span-2 md:col-span-3 lg:col-span-4 xl:col-span-5 flex flex-col items-center justify-center py-20 bg-white rounded-2xl border border-slate-100 border-dashed">
                        <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-slate-400 mb-4">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-700">Data Tidak Ditemukan</h3>
                        <p class="text-slate-500 text-sm mt-1 max-w-sm text-center">ID Obat yang kamu cari tidak terdaftar atau
                            sistem gagal memuat data.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    {{-- ========================================================== --}}
    {{-- MODAL AREA (KHUSUS ADMIN) --}}
    {{-- ========================================================== --}}
    @if(session('user_role') == 'admin')

        {{-- MODAL 1: TAMBAH OBAT --}}
        <div id="modalTambahObat"
            class="hidden fixed inset-0 z-50 flex items-center justify-center bg-slate-900/60 backdrop-blur-sm transition-opacity">
            <div class="bg-white rounded-2xl shadow-xl w-full max-w-lg overflow-hidden transform transition-all">
                <div class="bg-slate-50 px-6 py-4 border-b border-slate-100 flex justify-between items-center">
                    <h3 class="text-lg font-bold text-slate-800">Tambah Data Obat Baru</h3>
                    <button onclick="document.getElementById('modalTambahObat').classList.add('hidden')"
                        class="text-slate-400 hover:text-rose-500 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>

                <form action="/obat/store" method="POST" class="p-6">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Nama Obat</label>
                            <input type="text" name="name" required placeholder="Cth: Obat Batuk Hitam (OBH) 100ml"
                                class="w-full px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-sm outline-none transition-all">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Kategori</label>
                                <input type="text" name="category" required placeholder="Cth: Obat Batuk"
                                    class="w-full px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-sm outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Harga (Rp)</label>
                                <input type="number" name="price" required min="0" placeholder="Cth: 15000"
                                    class="w-full px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-sm outline-none transition-all">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Stok Awal</label>
                            <input type="number" name="stock" required min="0" placeholder="Cth: 140"
                                class="w-full px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-sm outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Deskripsi Produk</label>
                            <textarea name="description" rows="3" required
                                placeholder="Cth: Obat batuk legendaris untuk meredakan..."
                                class="w-full px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-sm outline-none transition-all resize-none"></textarea>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex justify-end gap-3">
                        <button type="button" onclick="document.getElementById('modalTambahObat').classList.add('hidden')"
                            class="px-5 py-2 text-sm font-medium text-slate-600 bg-slate-100 rounded-xl hover:bg-slate-200 transition">Batal</button>
                        <button type="submit"
                            class="px-5 py-2 text-sm font-medium text-white bg-emerald-600 rounded-xl hover:bg-emerald-700 transition shadow-lg shadow-emerald-200">Simpan
                            Obat</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- MODAL 2: EDIT OBAT --}}
        <div id="modalEditObat"
            class="hidden fixed inset-0 z-50 flex items-center justify-center bg-slate-900/60 backdrop-blur-sm transition-opacity">
            <div class="bg-white rounded-2xl shadow-xl w-full max-w-lg overflow-hidden transform transition-all">
                <div class="bg-slate-50 px-6 py-4 border-b border-slate-100 flex justify-between items-center">
                    <h3 class="text-lg font-bold text-slate-800">Edit Data Obat</h3>
                    <button onclick="document.getElementById('modalEditObat').classList.add('hidden')"
                        class="text-slate-400 hover:text-rose-500 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>

                <form id="formEditObat" method="POST" class="p-6">
                    @csrf
                    @method('PUT')
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Nama Obat</label>
                            <input type="text" id="edit_name" name="name" required
                                class="w-full px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Kategori</label>
                                <input type="text" id="edit_category" name="category" required
                                    class="w-full px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Harga (Rp)</label>
                                <input type="number" id="edit_price" name="price" required min="0"
                                    class="w-full px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Update Stok</label>
                            <input type="number" id="edit_stock" name="stock" required min="0"
                                class="w-full px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Deskripsi Produk</label>
                            <textarea id="edit_description" name="description" rows="3" required
                                class="w-full px-4 py-2 rounded-lg bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none resize-none"></textarea>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex justify-end gap-3">
                        <button type="button" onclick="document.getElementById('modalEditObat').classList.add('hidden')"
                            class="px-5 py-2 text-sm font-medium text-slate-600 bg-slate-100 rounded-xl hover:bg-slate-200 transition">Batal</button>
                        <button type="submit"
                            class="px-5 py-2 text-sm font-medium text-white bg-blue-600 rounded-xl hover:bg-blue-700 transition shadow-lg shadow-blue-200">Perbarui
                            Obat</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- SCRIPT PENGENDALI MODAL EDIT --}}
        <script>
            function openEditModal(button) {
                // Ekstrak data JSON dari atribut tombol
                const obat = JSON.parse(button.getAttribute('data-obat'));

                // Ubah action form agar mengarah ke endpoint Update milik ID obat yang spesifik
                document.getElementById('formEditObat').action = '/obat/' + obat.id + '/update';

                // Injeksi nilai data lama ke dalam field form
                document.getElementById('edit_name').value = obat.name || '';
                document.getElementById('edit_category').value = obat.category || '';
                document.getElementById('edit_price').value = obat.price || 0;
                document.getElementById('edit_stock').value = obat.stock || 0;
                document.getElementById('edit_description').value = obat.description || '';

                // Tampilkan Modal
                document.getElementById('modalEditObat').classList.remove('hidden');
            }
        </script>
    @endif
@endsection