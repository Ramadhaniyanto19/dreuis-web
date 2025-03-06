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
                    <form action="{{ route('search_doctors') }}" method="GET" class="gap-y-2 flex flex-col">
                        {{-- Filter Spesialisasi --}}
                        <div class="flex flex-col gap-y-2">
                            <p class="text-slate-700 text-base">Layanan Kesehatan</p>
                            <button id="dropdownDelayButton" data-dropdown-toggle="layananKesehatan"
                                class="text-slate-600 w-[94%] bg-white border border-gray-300 hover:bg-custom-green focus:ring-4 focus:outline-none font-medium rounded-lg hover:text-white text-sm px-5 py-2.5 text-center inline-flex items-center relative"
                                type="button">
                                {{ request('specialization', 'Pilih Spesialis') }}
                                <svg class="w-2.5 h-2.5 absolute right-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="layananKesehatan"
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[41%] w-[80%] h-32 overflow-y-scroll">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                    <li>
                                        <button type="button" onclick="setSpecialization('')"
                                            class="block text-white px-4 py-2 hover:bg-custom-blue w-full text-left">
                                            Semua Spesialis
                                        </button>
                                    </li>
                                    @foreach ($specializations as $specialization)
                                        <li>
                                            <button type="button" onclick="setSpecialization('{{ $specialization }}')"
                                                class="block text-white px-4 py-2 hover:bg-custom-blue w-full text-left">
                                                Spesialis {{ $specialization }}
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <input type="hidden" name="specialization" id="specializationInput"
                                value="{{ request('specialization') }}">
                        </div>

                        {{-- Filter Hari --}}
                        <div class="flex flex-col gap-y-2">
                            <p class="text-slate-700 text-base">Pilih Hari</p>
                            <button id="pilihhari" data-dropdown-toggle="pilihHari"
                                class="text-slate-600 w-[94%] bg-white border border-gray-300 hover:bg-custom-green focus:ring-4 focus:outline-none font-medium rounded-lg hover:text-white text-sm px-5 py-2.5 text-center inline-flex items-center relative"
                                type="button">
                                {{ request('day', 'Pilih Hari') }}
                                <svg class="w-2.5 h-2.5 absolute right-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="pilihHari"
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[41%] w-[80%] h-32 overflow-y-scroll">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                    <li>
                                        <button type="button" onclick="setDay('')"
                                            class="block text-white px-4 py-2 hover:bg-custom-blue w-full text-left">
                                            Semua Hari
                                        </button>
                                    </li>
                                    @foreach ($days as $day)
                                        <li>
                                            <button type="button" onclick="setDay('{{ $day }}')"
                                                class="block text-white px-4 py-2 hover:bg-custom-blue w-full text-left">
                                                {{ $day }}
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <input type="hidden" name="day" id="dayInput" value="{{ request('day') }}">
                        </div>

                        {{-- Tombol Submit --}}
                        <button type="submit"
                            class="bg-custom-blue mt-4 hover:bg-custom-green text-white font-bold w-[94%] h-12 rounded-xl">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-y-4 w-full h-full justify-center items-center">
            @foreach ($doctors as $doctor)
                <div
                    class="flex flex-col md:flex-row items-center w-[90%] h-auto md:h-60 bg-white shadow-lg border-slate-200 border rounded-xl px-4 py-4 md:gap-x-14">
                    {{-- <div class="flex flex-col md:flex-row gap-x-8 items-center w-full md:w-[40%]">
                        <div
                            class="flex flex-col gap-y-2.5 w-full md:w-72 text-center justify-center items-center md:items-start md:text-left">
                            <h2 class="text-black font-semibold text-lg">{{ $doctor['name'] }}</h2>
                            <p class="text-sm">Spesialis {{ $doctor['specialization'] }}</p>
                            <a href="{{ url('/buat-janji?dokter=' . urlencode($doctor['name']) . '&spesialis=' . urlencode($doctor['specialization'])) }}"
                                class="bg-gradient-to-bl from-custom-blue to-custom-green text-white font-semibold w-32 text-center py-1 rounded-lg text-sm cursor-pointer">
                                Booking sekarang
                            </a>

                        </div>
                    </div> --}}

                    <div class="flex flex-col gap-y-4 w-full h-full justify-center items-center">
                        {{-- @foreach ($doctors as $doctor) --}}
                        <div
                            class="flex flex-col md:flex-row md:justify-center md:gap-x-1 items-center w-full rounded-xl">
                            <div class="flex flex-col md:flex-row gap-x-3 items-center w-full md:w-[40%]">
                                <img src="{{ asset('storage/' . $doctor->image) }}"
                                    class="w-24 h-24 md:w-36 md:h-36 rounded-full" alt="{{ $doctor->name }}">
                                <div class="flex flex-col gap-y-2.5 text-center md:text-left">
                                    <h2 class="text-black font-semibold text-lg">{{ $doctor->name }}</h2>
                                    <p class="text-sm">Spesialis {{ $doctor->specialization }}</p>
                                    <a href="{{ url('/buat-janji?dokter=' . urlencode($doctor->name) . '&spesialis=' . urlencode($doctor->specialization) . '&hari=' . urlencode('Senin')) }}"
                                        class="bg-gradient-to-bl from-custom-blue to-custom-green text-white font-semibold w-32 text-center py-1 rounded-lg text-sm cursor-pointer">
                                        Booking sekarang
                                    </a>
                                </div>
                            </div>
                            <div class="overflow-x-auto w-full mt-4 md:mt-0">
                                <table class="w-full text-sm text-center text-gray-500 border-collapse">
                                    <thead
                                        class="text-xs text-white font-bold bg-gradient-to-br from-custom-green to-custom-blue">
                                        <tr>
                                            @php
                                                $days = [
                                                    'Senin',
                                                    'Selasa',
                                                    'Rabu',
                                                    'Kamis',
                                                    'Jumat',
                                                    'Sabtu',
                                                    'Minggu',
                                                ];
                                            @endphp
                                            @foreach ($days as $day)
                                                <th class="px-3 py-3 border">{{ $day }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b">
                                            @foreach ($days as $day)
                                                @php
                                                    $schedule = $doctor->schedules->where('day', $day)->first();
                                                @endphp
                                                <td class="px-3 py-4 border">
                                                    @if ($schedule)
                                                        <div class="flex flex-col gap-y-1">
                                                            <span
                                                                class="font-bold text-xs">{{ $schedule->start_time }}
                                                                -
                                                                {{ $schedule->end_time }}</span>
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
                        {{-- @endforeach --}}
                    </div>
                </div>
            @endforeach


        </div>

    </div>
</x-layout>


<script>
    // Fungsi untuk mengatur nilai spesialisasi
    function setSpecialization(value) {
        document.getElementById('specializationInput').value = value;
        document.getElementById('dropdownDelayButton').innerText = value || 'Pilih Spesialis';
    }

    // Fungsi untuk mengatur nilai hari
    function setDay(value) {
        document.getElementById('dayInput').value = value;
        document.getElementById('pilihhari').innerText = value || 'Pilih Hari';
    }
</script>
