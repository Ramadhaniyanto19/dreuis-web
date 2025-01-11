<x-layout>
    <div class="flex flex-col w-full h-full items-center justify-center mb-28 gap-y-10 -mt-4">
        <div class="flex flex-col items-center justify-center bg-cover bg-no-repeat w-full h-[450px] relative"
            style="background-image: url(../assets/img1.jpg)">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black opacity-50 z-10"></div>
            <!-- Breadcrumb dan Konten -->
            <div class="relative z-20 flex flex-col items-center">
                <nav class="flex rounded-xl" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="/"
                                class="inline-flex items-center text-sm font-semibold text-white hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-white font-semibold mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ms-1 text-sm text-white font-semibold md:ms-2 dark:text-gray-400">Jadwal
                                    Dokter</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-2xl font-bold text-custom-green mt-4">Jadwal Dokter</h1>
            </div>
        </div>
        <div class="flex flex-col w-full h-full items-center justify-center">
            <div class="flex flex-col w-[90%] h-auto pb-10 border rounded-lg bg-white shadow-lg">
                <div class="flex flex-col items-center mt-4 justify-center my-4 text-center gap-y-4">
                    <h2 class="text-3xl font-bold text-custom-blue">Cari Jadwal Dokter</h2>
                    <p class="text-sm text-custom-green w-80 md:w-[800px]">Temukan jadwal dokter yang sesuai dengan
                        kebutuhan
                        Anda.
                        Klik
                        tombol "Cari" untuk melihat daftar dokter yang tersedia. <span class="text-slate-400"> *Untuk
                            jadwal
                            dokter dapat berubah-ubah
                            silakan hubungi kontak
                            berikut 628938383838.</span></p>
                </div>
                <div class="flex flex-col pl-4">
                    <form action="" class="gap-y-2 flex flex-col">

                        {{-- Layanan Kesehatan --}}
                        <div class="flex flex-col gap-y-2">
                            <p class="text-slate-700 text-base">Layanan Kesehatan</p>
                            <button id="dropdownDelayButton" data-dropdown-toggle="layananKesehatan"
                                data-dropdown-delay="500" data-dropdown-trigger="hover"
                                class="text-slate-600 w-[94%] bg-white border border-gray-300 hover:bg-custom-green focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg hover:text-white text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 relative"
                                type="button">Pilih Spesialis<svg class="w-2.5 h-2.5 absolute right-2 "
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="layananKesehatan"
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[83%] w-[80%] dark:bg-custom-blue h-32 overflow-y-scroll">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDelayButton">
                                    @foreach ($jadwalDokter as $jadwal)
                                        <li>
                                            <p class="block text-white px-4 py-2 hover:bg-custom-blue"
                                                onclick="setSelectedSpecialist('{{ $jadwal['spesialis'] }}')">
                                                Spesialis {{ $jadwal['spesialis'] }}
                                            </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- Pilih Hari --}}
                        <div class="flex flex-col gap-y-2">
                            <p class="text-slate-700 text-base">Pilih hari</p>
                            <button id="pilihhari" data-dropdown-toggle="pilihHari" data-dropdown-delay="500"
                                data-dropdown-trigger="hover"
                                class="text-slate-600 w-[94%] bg-white border border-gray-300 hover:bg-custom-green focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg hover:text-white text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 relative"
                                type="button">Pilih Hari<svg class="w-2.5 h-2.5 absolute right-2 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="pilihHari"
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[83%] w-[80%] dark:bg-custom-blue h-32 overflow-y-scroll">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="pilihhari">
                                    @php
                                        $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
                                    @endphp
                                    @foreach ($days as $day)
                                        <li>
                                            <p class="block text-white px-4 py-2 hover:bg-custom-blue" id="selectedDay"
                                                onclick="setSelectedDay('{{ $day }}')">
                                                {{ $day }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- Pilih Dokter --}}
                        <div class="flex flex-col gap-y-2 w-full mt-4">
                            <p class="text-slate-700 text-base">Pilih Dokter</p>
                            <button id="dropdownDokterButton" data-dropdown-toggle="pilihDokter"
                                class="text-slate-600 w-[94%] bg-white border border-gray-300 hover:bg-custom-green focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg hover:text-white text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 relative"
                                type="button">Pilih Dokter<svg class="w-2.5 h-2.5 absolute right-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="pilihDokter"
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[83%] w-[80%] dark:bg-custom-blue h-32 overflow-y-scroll">
                                <ul id="dokterList" class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDokterButton">
                                    <!-- Dokter akan dimasukkan di sini oleh JavaScript -->
                                </ul>
                            </div>
                        </div>

                        <button type="submit"
                            class="bg-custom-blue mt-4 hover:bg-custom-green text-white font-bold w-[94%] h-12 rounded-xl ">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-y-4 w-full h-full justify-center items-center">
            @foreach ($jadwalDokter as $jadwal)
                <div
                    class="flex flex-col md:flex-row items-center w-[90%] h-auto md:h-60 bg-white shadow-lg border-slate-200 border rounded-xl px-4 py-4 md:gap-x-14">
                    <div class="flex flex-col md:flex-row gap-x-8 items-center w-full md:w-[40%]">
                        <img src="../assets/doctor.jpg" class="w-24 h-24 md:w-48 md:h-48 rounded-full"
                            alt="">
                        <div
                            class="flex flex-col gap-y-2.5 w-full md:w-72 text-center justify-center items-center md:items-start md:text-left">
                            <h2 class="text-black font-semibold text-lg">{{ $jadwal['nama'] }}</h2>
                            <p class="text-sm">Spesialis {{ $jadwal['spesialis'] }}</p>
                            <a href="{{ url('/buat-janji?dokter=' . urlencode($jadwal['nama']) . '&spesialis=' . urlencode($jadwal['spesialis'])) }}"
                                class="bg-gradient-to-bl from-custom-blue to-custom-green text-white font-semibold w-32 text-center py-1 rounded-lg text-sm cursor-pointer">
                                Booking sekarang
                            </a>

                        </div>
                    </div>

                    <!-- Table days -->
                    <div
                        class="relative overflow-x-auto mt-4 md:mt-0 md:ml-3 w-full  [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar]:h-0.5
                        pb-10
                        [&::-webkit-scrollbar-track]:bg-gray-100
                        [&::-webkit-scrollbar-thumb]:bg-gray-300
                        dark:[&::-webkit-scrollbar-track]:bg-neutral-700
                        dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                        <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-white font-bold bg-gradient-to-br from-custom-green to-custom-blue">
                                <tr>
                                    <th scope="col" class="px-2 md:px-3 py-3 font-bold">Senin</th>
                                    <th scope="col" class="px-2 md:px-3 py-3 font-bold">Selasa</th>
                                    <th scope="col" class="px-2 md:px-3 py-3 font-bold">Rabu</th>
                                    <th scope="col" class="px-2 md:px-3 py-3 font-bold">Kamis</th>
                                    <th scope="col" class="px-2 md:px-3 py-3 font-bold">Jumat</th>
                                    <th scope="col" class="px-2 md:px-3 py-3 font-bold">Sabtu</th>
                                    <th scope="col" class="px-2 md:px-3 py-3 font-bold">Minggu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b">
                                    @php
                                        // Array hari untuk mapping jadwal
                                        $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
                                    @endphp
                                    @foreach ($days as $day)
                                        @php
                                            // Mencari jadwal yang sesuai
                                            $schedule = collect($jadwal['jadwal'])->first(function ($item) use ($day) {
                                                // Cek apakah hari ada dalam jadwal (rentang atau daftar)
                                                $hari = $item['hari'];
                                                if (str_contains($hari, '-')) {
                                                    // Jika rentang hari, buat array hari di antara rentang
                                                    [$start, $end] = explode('-', $hari);
                                                    $dayRange = collect([
                                                        'Senin',
                                                        'Selasa',
                                                        'Rabu',
                                                        'Kamis',
                                                        'Jumat',
                                                        'Sabtu',
                                                        'Minggu',
                                                    ])
                                                        ->slice(
                                                            array_search($start, [
                                                                'Senin',
                                                                'Selasa',
                                                                'Rabu',
                                                                'Kamis',
                                                                'Jumat',
                                                                'Sabtu',
                                                                'Minggu',
                                                            ]),
                                                            array_search($end, [
                                                                'Senin',
                                                                'Selasa',
                                                                'Rabu',
                                                                'Kamis',
                                                                'Jumat',
                                                                'Sabtu',
                                                                'Minggu',
                                                            ]) -
                                                                array_search($start, [
                                                                    'Senin',
                                                                    'Selasa',
                                                                    'Rabu',
                                                                    'Kamis',
                                                                    'Jumat',
                                                                    'Sabtu',
                                                                    'Minggu',
                                                                ]) +
                                                                1,
                                                        )
                                                        ->toArray();
                                                    return in_array($day, $dayRange);
                                                } elseif (str_contains($hari, ',')) {
                                                    // Jika daftar hari, pecah string menjadi array
                                                    $dayList = array_map('trim', explode(',', $hari));
                                                    return in_array($day, $dayList);
                                                } else {
                                                    // Cek hari tunggal
                                                    return $hari === $day;
                                                }
                                            });
                                        @endphp
                                        <td class="px-2 md:px-6 py-4">
                                            @if ($schedule)
                                                <div class="flex flex-col gap-y-0.5">
                                                    <span class="font-bold text-xs w-20">{{ $schedule['jam'] }}</span>
                                                    <span class="text-[9px]">Umum dan BPJS</span>
                                                </div>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
</x-layout>


<script>
    function setSelectedSpecialist(spesialis) {
        document.getElementById('dropdownDelayButton').textContent = 'Spesialis ' + spesialis;
        updateDokterList(spesialis);
    }

    function setSelectedDay(day) {
        document.getElementById('pilihhari').textContent = day;
        // document.getElementById('selected_day').value = day;
    }

    // Ambil data dari Blade Template
    const jadwalDokter = @json($jadwalDokter);


    // Fungsi untuk memperbarui daftar dokter
    function updateDokterList(spesialis) {
        const dokterListContainer = document.getElementById('dokterList');

        // Kosongkan daftar dokter sebelumnya
        dokterListContainer.innerHTML = '';

        // Filter dokter berdasarkan spesialis
        const filteredDokter = jadwalDokter.filter(dokter => dokter.spesialis === spesialis);

        // Tambahkan dokter baru ke dalam daftar
        filteredDokter.forEach(dokter => {
            const li = document.createElement('li');
            li.innerHTML = `
            <p class="block text-white px-4 py-2 hover:bg-custom-blue" onclick="setSelectedDokter('${dokter.nama}')">
                ${dokter.nama}
            </p>
        `;
            dokterListContainer.appendChild(li);
        });
    }

    // Fungsi untuk mengatur dokter yang dipilih
    function setSelectedDokter(dokter) {
        // Ubah teks tombol dropdown dokter
        document.getElementById('dropdownDokterButton').textContent = dokter;
    }
</script>
