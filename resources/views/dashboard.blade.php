<h1 class="text-xl font-bold">
    Selamat Datang, {{ session('user_name', 'Guest') }}!
</h1>

@if(session('user_role') == 'admin')
    <span class="bg-emerald-500 text-white px-2 py-1 rounded-full text-xs">Administrator</span>
@else
    <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs">Staff Apotek</span>
@endif