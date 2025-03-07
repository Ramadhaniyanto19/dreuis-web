{{-- <x-layout>
    <div class="flex flex-col w-full h-full items-center px-8 bg-sky-400 shadow-xl justify-center pb-20 gap-y-10">
        <div class="flex flex-col w-full h-full pt-10">
            <div class="flex flex-col w-full h-full">
                <img src="../assets/img1.jpg" alt="" class="w-full h-full rounded-t-lg">
                <div class="flex flex-col bg-white h-full w-full px-14 gap-y-2 pb-16">
                    <h1 class="text-5xl font-bold text-custom-blue mt-4">Pelayanan Kesehatan Adalah Dukungan Pemeliharaan
                        Kesehatan</h1>
                    <p class="text-base text-slate-600 font-bold">by Dr. Euis</p>
                    <div class="whitespace-pre-line w-full text-lg">
                        Pelayanan kesehatan adalah setiap upaya untuk memelihara dan meningkatkan kesehatan serta mencegah dan menyembuhkan penyakit masyarakat.

                        Dalam peraturan dasar negara, setiap masyarakat Indonesia mempunyai hak yang sama dalam memperoleh pelayanan kesehatan yang aman, bermutu, dan terjangkau. Setiap individu atau sekelompok masyarakat berhak secara mandiri dan bertanggung jawab menentukan sendiri apa tindakan layanan kesehatan yang penting untuk dirinya sendiri.

                        Kebijakan itulah yang mendasari upaya industri bidang kesehatan Indonesia yang secara aktif mempersiapkan sistem layanan kesehatan yang berkelanjutan untuk menjaga kesehatan masyarakat secara terpadu. Dengan tujuan bahwa lambat laun masyarakat akan memiliki kesadaran yang lebih baik terhadap kesehatan, ekspektasi pada layanan kesehatan, serta inovasi dalam perawatan kesehatan dan infrastrukturnya yang semakin meningkat.

                        Pada artikel berikut, kita akan bersama-sama membahas dan memahami lebih dalam konsep pelayanan kesehatan di Indonesia. Demi penyediaan layanan dan perawatan klinis pasien di setiap fasilitas kesehatan yang lebih berkualitas. Baik itu pada tingkat fasilitas rumah sakit, klinik, puskesmas, balai kesehatan, tempat praktek mandiri dokter, dan bahkan laboratorium kesehatan.
                   
                        Sederhananya, pelayanan kesehatan adalah sebuah konsep yang digunakan dalam memberikan layanan medis dasar dan/atau medis spesialistik kepada masyarakat. Dengan tujuan pemeliharaan atau peningkatan status kesehatan melalui usaha-usaha pencegahan, diagnosis, terapi, pemulihan, atau penyembuhan penyakit, cedera, serta gangguan fisik dan mental lainnya.
                    
                        Bila dijabarkan secara detail, pelayanan kesehatan adalah setiap upaya yang diselenggarakan sendiri atau secara bersama-sama dalam suatu organisasi untuk layanan promotif (memelihara dan meningkatkan kesehatan), layanan preventif (mencegah dan menyembuhkan penyakit), serta memulihkan kesehatan perorangan, keluarga, kelompok dan ataupun keseluruhan masyarakat.
                 
                        Utamanya, penyelenggaraan layanan kesehatan diberikan secara profesional oleh tenaga kesehatan dan tenaga pendukung kesehatan, misalnya dokter umum, dokter spesialis, dokter subspesialis terbatas, perawat, bidan, apoteker, petugas kesehatan lingkungan, dan beserta asisten-asistennya.
                    </div>

                    <div class="flex flex-row items-center justify-center text-center gap-x-2">
                        <a href="/berita" class="text-center items-center flex hover:text-custom-blue font-semibold flex-row">
                            <x-fas-search class="w-6 h-6 font-bold text-custom-green "/>
                            <span class="text-base font-bold text-custom-green">Cari berita lainnya</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout> --}}


<x-layout>
    <div class="flex flex-col w-full h-full items-center px-2 md:px-8 bg-sky-400 shadow-xl justify-center pb-20">
        <div class="flex flex-col w-full h-auto mt-0 md:pt-10">
            <div class="flex flex-col w-full h-full">
                <!-- Gambar Berita -->
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                    class="w-full h-80 md:h-[500px] rounded-t-lg">

                <!-- Konten Berita -->
                <div class="flex flex-col bg-white h-full w-full px-4 md:px-14 gap-y-2 pb-16">
                    <h1 class="text-2xl md:text-5xl font-bold text-custom-blue mt-4">{{ $berita->judul }}</h1>
                    <p class="text-sm text-slate-600 font-semibold">by {{ $berita->penulis }}</p>
                    <p class="text-sm text-slate-600 font-semibold">
                        Dipublikasikan pada: {{ $berita->created_at->translatedFormat('l, j F Y H:i') }}
                    </p>
                    <div class="whitespace-pre-line w-full text-base">
                        {{ strip_tags($berita->isi) }}
                    </div>

                    <!-- Tombol Kembali ke Berita -->
                    <div class="flex flex-row items-center justify-center text-center gap-x-2 mt-10">
                        <a href="/berita"
                            class="text-center items-center flex hover:text-custom-blue font-semibold flex-row">
                            <x-fas-search class="w-6 h-6 font-bold text-custom-green" />
                            <span class="text-base font-bold text-custom-green">Kembali ke Berita</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
