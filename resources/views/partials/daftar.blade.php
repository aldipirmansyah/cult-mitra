{{-- Pendaftaran --}}
<section id="daftar" class="py-24 bg-slate-50">

    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-12">

            <img
                src="{{ asset('images/logo-cult.png') }}"
                alt="Cult Mitra"
                class="h-20 mx-auto mb-6">

            <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full font-medium">
                🚀 Pendaftaran Gratis
            </span>

            <h2 class="text-4xl md:text-5xl font-bold mt-6">
                Daftar Menjadi Agen Cult Mitra
            </h2>

            <p class="text-slate-600 mt-4 text-lg">
                Mulai usaha PPOB dengan modal ringan dan dapatkan aplikasi Android untuk bertransaksi.
            </p>

        </div>

        <div class="grid lg:grid-cols-3 gap-8">

            {{-- Informasi --}}
            <div>

                <div class="bg-white rounded-2xl shadow-lg p-6">

                    <h3 class="font-bold text-xl mb-5">
                        Keuntungan Bergabung
                    </h3>

                    <div class="space-y-4">

                        <div>
                            ✅ Pendaftaran Gratis
                        </div>

                        <div>
                            ✅ Deposit Awal Mulai Rp10.000
                        </div>

                        <div>
                            ✅ Mendapatkan Aplikasi Android
                        </div>

                        <div>
                            ✅ Fee Bisa Masuk ke Deposit
                        </div>

                        <div>
                            ✅ Fee Bisa Masuk ke Rekening
                        </div>

                        <div>
                            ✅ Support Admin via WhatsApp
                        </div>

                    </div>

                    <hr class="my-6">

                    <h4 class="font-semibold mb-3">
                        Hubungi Admin
                    </h4>

                    <p class="text-slate-600">
                        📱 0851-7323-1909
                    </p>

                    <p class="text-slate-600">
                        ✉️ aldipirmansyah90@gmail.com
                    </p>

                </div>

            </div>

            {{-- Form --}}
            <div class="lg:col-span-2">

                <div class="bg-white rounded-2xl shadow-lg p-8">

                    <form id="formPendaftaran">

                        <div class="grid md:grid-cols-2 gap-5">

                            <input
                                type="text"
                                id="nama_loket"
                                placeholder="Nama Loket"
                                class="border border-slate-300 rounded-xl p-3 w-full focus:ring-2 focus:ring-blue-500">

                            <input
                                type="text"
                                id="pemilik"
                                placeholder="Nama Pemilik"
                                class="border border-slate-300 rounded-xl p-3 w-full focus:ring-2 focus:ring-blue-500">

                            <input
                                type="text"
                                id="ktp"
                                placeholder="Nomor KTP"
                                class="border border-slate-300 rounded-xl p-3 w-full focus:ring-2 focus:ring-blue-500">

                            <input
                                type="text"
                                id="hp"
                                placeholder="Nomor HP"
                                class="border border-slate-300 rounded-xl p-3 w-full focus:ring-2 focus:ring-blue-500">

                        </div>

                        <textarea
                            id="alamat"
                            rows="4"
                            placeholder="Alamat Lengkap"
                            class="border border-slate-300 rounded-xl p-3 w-full mt-5 focus:ring-2 focus:ring-blue-500"></textarea>

                        <input
                            type="email"
                            id="email"
                            placeholder="Email"
                            class="border border-slate-300 rounded-xl p-3 w-full mt-5 focus:ring-2 focus:ring-blue-500">

                        <div class="grid md:grid-cols-2 gap-5 mt-5">

                            <select
                                id="aplikasi"
                                class="border border-slate-300 rounded-xl p-3">

                                <option value="">Pilih Aplikasi</option>
                                <option>Android</option>
                                <option>PC</option>
                                <option>Android & PC</option>

                            </select>

                            <select
                                id="fee"
                                class="border border-slate-300 rounded-xl p-3">

                                <option value="">Fee Masuk Ke</option>
                                <option>Saldo Deposit</option>
                                <option>Rekening Bank</option>

                            </select>

                        </div>

                        <div class="grid md:grid-cols-3 gap-5 mt-5">

                            <input
                                type="text"
                                id="rekening"
                                placeholder="Nomor Rekening"
                                class="border border-slate-300 rounded-xl p-3">

                            <input
                                type="text"
                                id="bank"
                                placeholder="Nama Bank"
                                class="border border-slate-300 rounded-xl p-3">

                            <input
                                type="text"
                                id="pemilik_rekening"
                                placeholder="Pemilik Rekening"
                                class="border border-slate-300 rounded-xl p-3">

                        </div>

                        <button
                            type="button"
                            onclick="kirimWhatsapp()"
                            class="bg-orange-500 hover:bg-orange-600 text-white py-4 rounded-xl mt-8 w-full font-semibold text-lg shadow-lg">

                            🚀 Daftar Sekarang

                        </button>

                        <p class="text-center text-sm text-slate-500 mt-4">

                            Data akan langsung dikirim ke WhatsApp Admin Cult Mitra.

                        </p>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>