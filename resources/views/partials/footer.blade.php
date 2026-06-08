{{-- CTA Section --}}
<section class="bg-gradient-to-r from-blue-600 to-blue-700 py-16">

    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-4xl font-bold text-white">
            Siap Menjadi Agen Cult Mitra?
        </h2>

        <p class="text-blue-100 mt-4 text-lg">
            Daftar gratis, deposit mulai Rp10.000, dan dapatkan aplikasi Android untuk mulai bertransaksi.
        </p>

        <div class="mt-8 flex justify-center gap-4 flex-wrap">

            <a href="#daftar"
                class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-xl font-semibold">

                Daftar Sekarang

            </a>

            <a href="https://wa.me/6285173231909"
                target="_blank"
                class="bg-white text-blue-600 px-8 py-4 rounded-xl font-semibold">

                Hubungi Admin

            </a>

        </div>

    </div>

</section>

{{-- Footer --}}
<footer class="bg-slate-900 text-white">

    <div class="max-w-7xl mx-auto px-6 py-14">

        <div class="grid md:grid-cols-4 gap-10">

            {{-- Logo --}}
            <div>

                <img
                    src="{{ asset('images/logo-cult.png') }}"
                    alt="Cult Mitra"
                    class="h-16 mb-4">

                <p class="text-slate-400">
                    Cult Mitra adalah layanan PPOB & POS yang membantu mitra melakukan berbagai transaksi digital dengan mudah dan cepat.
                </p>

            </div>

            {{-- Produk --}}
            <div>

                <h4 class="font-bold text-lg mb-4">
                    Produk
                </h4>

                <ul class="space-y-2 text-slate-400">

                    <li>Pulsa Semua Operator</li>
                    <li>Paket Data</li>
                    <li>Token PLN</li>
                    <li>Pembayaran Tagihan</li>
                    <li>Top Up E-Wallet</li>

                </ul>

            </div>

            {{-- Menu --}}
            <div>

                <h4 class="font-bold text-lg mb-4">
                    Menu Cepat
                </h4>

                <ul class="space-y-2">

                    <li><a href="#produk" class="text-slate-400 hover:text-white">Produk</a></li>

                    <li><a href="#keunggulan" class="text-slate-400 hover:text-white">Keunggulan</a></li>

                    <li><a href="#faq" class="text-slate-400 hover:text-white">FAQ</a></li>

                    <li><a href="#daftar" class="text-slate-400 hover:text-white">Pendaftaran</a></li>

                </ul>

            </div>

            {{-- Kontak --}}
            <div>

                <h4 class="font-bold text-lg mb-4">
                    Hubungi Kami
                </h4>

                <div class="space-y-3 text-slate-400">

                    <p>
                        📱 0851-7323-1909
                    </p>

                    <p>
                        ✉️ aldipirmansyah90@gmail.com
                    </p>

                    <p>
                        🕒 Support via WhatsApp
                    </p>

                </div>

            </div>

        </div>

    </div>

    <div class="border-t border-slate-800">

        <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center gap-4">

            <p class="text-slate-500 text-sm">
                © {{ date('Y') }} Cult Mitra PPOB & POS. All Rights Reserved.
            </p>

            <p class="text-slate-500 text-sm">
                Pendaftaran Gratis • Deposit Mulai Rp10.000
            </p>

        </div>

    </div>

</footer>