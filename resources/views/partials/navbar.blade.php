{{-- Navbar --}}
<nav class="bg-white shadow-sm sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        {{-- Logo --}}
        <div class="flex items-center">

            <img
                src="{{ asset('images/logo-cult.png') }}"
                alt="Cult PPOB & POS"
                class="h-24 w-auto">

        </div>

        {{-- Menu --}}
        <div class="hidden md:flex items-center gap-8 font-medium text-slate-700">

            <a href="#produk" class="hover:text-blue-600">
                Produk
            </a>

            <a href="#keunggulan" class="hover:text-blue-600">
                Keunggulan
            </a>

            <a href="#daftar" class="hover:text-blue-600">
                Cara Daftar
            </a>

            <a href="#faq" class="hover:text-blue-600">
                FAQ
            </a>

        </div>

        {{-- Tombol --}}
        <a href="#daftar"
            class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-xl font-semibold shadow-md">

            Daftar Sekarang

        </a>

    </div>

</nav>