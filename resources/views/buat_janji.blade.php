<x-layout>
    <div class="flex flex-col w-full h-full items-center justify-center mb-28 gap-y-10 -mt-4">
        <div class="flex flex-col items-center justify-center bg-cover bg-no-repeat w-full h-[450px] relative"
            style="background-image: url(../assets/promise.jpg)">
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
                                <span class="ms-1 text-sm text-white font-semibold md:ms-2 dark:text-gray-400">Buat
                                    Janji</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-2xl font-bold text-custom-green mt-4">Buat Janji</h1>
            </div>
        </div>
        <div class="flex flex-col w-full h-full items-center justify-center">
            <div class="flex flex-col w-[90%] h-auto pb-10 border rounded-lg bg-white shadow-lg">
                <div class="flex flex-col items-center mt-4 justify-center my-4 text-center gap-y-4">
                    <h2 class="text-3xl font-bold text-custom-blue">Buat Janji</h2>
                    <p class="text-sm text-custom-green w-80 md:w-[800px]">Masukkan data Anda untuk membuat janji temu!
                    </p>
                </div>
                <div class="flex flex-col px-8">
                    <form action="" class="flex flex-col">
                        <div class="mb-6">
                            <label for="Nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            </label>
                            <input type="text" id="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan nama" required />
                        </div>
                        <div class="mb-6">
                            <label for="nomor_hp"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Hp </label>
                            <input type="text" id="nomor_hp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan nomor hp" required />
                        </div>
                        <div class="mb-6">
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                            </label>
                            <input type="text" id="alamat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan alamat" required />
                        </div>
                        <div class="mb-6">
                            <label for="dokter"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokter</label>
                            <input type="text" id="dokter"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 opacity-50 cursor-not-allowed"
                                value="{{ $dokter }}" disabled required />
                        </div>
                        <div class="mb-6">
                            <label for="Spesialis"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Spesialis</label>
                            <input type="text" id="Spesialis"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 opacity-50 cursor-not-allowed"
                                placeholder="{{ $spesialis }}" disabled required />
                        </div>

                        <div class="flex flex-col gap-y-2 mb-6">
                            <p class="text-slate-700 text-base">Pilih hari</p>
                            <button id="pilihhari" data-dropdown-toggle="pilihHari" data-dropdown-delay="500"
                                data-dropdown-trigger="hover"
                                class="text-slate-600 w-full bg-white border border-gray-300 hover:bg-custom-green focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg hover:text-white text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 relative"
                                type="button">Pilih Hari<svg class="w-2.5 h-2.5 absolute right-2 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="pilihHari"
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[85%] w-[80%] dark:bg-custom-blue h-32 overflow-y-scroll">
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

                        {{-- <div class="mb-6">
                            <label for="Spesialis"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Spesialis</label>
                            <input type="text" id="Spesialis"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 opacity-50 cursor-not-allowed"
                                placeholder="{{ $hari }}" disabled required />
                        </div> --}}

                        {{-- <div class="flex flex-col gap-y-2 mb-6">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih dokter</p>
                            <button id="dropdownDelayButton" data-dropdown-toggle="pilih_dokter"
                                data-dropdown-delay="500" data-dropdown-trigger="hover"
                                class="text-slate-600 w-full bg-white border border-gray-300 hover:bg-custom-green focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg hover:text-white text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 relative"
                                type="button">Pilih Dokter<svg class="w-2.5 h-2.5 absolute right-2 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="pilih_dokter"
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[85%] w-[80%] dark:bg-custom-blue h-32 overflow-y-scroll">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDelayButton">
                                    <li>
                                        <a href="#"
                                            class="block text-white px-4 py-2 hover:bg-custom-blue">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-custom-blue text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-custom-blue text-white">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-custom-blue text-white">Sign
                                            out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-2 mb-6">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Hari</p>
                            <button id="dropdownDelayButton" data-dropdown-toggle="pilih_hari" data-dropdown-delay="500"
                                data-dropdown-trigger="hover"
                                class="text-slate-600 w-full bg-white border border-gray-300 hover:bg-custom-green focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg hover:text-white text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 relative"
                                type="button">Pilih Spesialis<svg class="w-2.5 h-2.5 absolute right-2 "
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="pilih_hari"
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[85%] w-[80%] dark:bg-custom-blue h-32 overflow-y-scroll">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDelayButton">
                                    <li>
                                        <a href="#"
                                            class="block text-white px-4 py-2 hover:bg-custom-blue">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-custom-blue text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-custom-blue text-white">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-custom-blue text-white">Sign
                                            out</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}

                        <a href="https://wa.me/+6285881298808?text=Selamat siang admin, saya ingin membuat janji dengan dokter <?= $dokter ?> pada hari <?= $day ?>"
                            type="submit"
                            class="text-white bg-custom-blue hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm
                            class=text-white
                            bg-custom-blue hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300
                            font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-layout>

<script>
    function setSelectedDay(day) {
        document.getElementById('pilihhari').textContent = day;
    }
</script>
