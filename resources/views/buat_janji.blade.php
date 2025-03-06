<x-layout>
    <div class="flex flex-col w-full h-full items-center justify-center mb-28 gap-y-10 -mt-4">
        <!-- Breadcrumb dan Header -->
        <div class="flex flex-col items-center justify-center bg-cover bg-no-repeat w-full h-[450px] relative"
            style="background-image: url(../assets/promise.jpg)">
            <div class="absolute inset-0 bg-black opacity-50 z-10"></div>
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

        <!-- Form Buat Janji -->
        <div class="flex flex-col w-full h-full items-center justify-center">
            <div class="flex flex-col w-[90%] h-auto pb-10 border rounded-lg bg-white shadow-lg">
                <div class="flex flex-col items-center mt-4 justify-center my-4 text-center gap-y-4">
                    <h2 class="text-3xl font-bold text-custom-blue">Buat Janji</h2>
                    <p class="text-sm text-custom-green w-80 md:w-[800px]">Masukkan data Anda untuk membuat janji temu!
                    </p>
                </div>
                <div class="flex flex-col px-8">
                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                            role="alert">
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif
                    <form action="{{ route('appointment.store') }}" method="POST" class="flex flex-col">
                        @csrf
                        <!-- Input Nama -->
                        <div class="mb-6">
                            <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan nama" required />
                        </div>

                        <!-- Input Nomor HP -->
                        <div class="mb-6">
                            <label for="nomor_hp"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP</label>
                            <input type="text" id="nomor_hp" name="nomor_hp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan nomor hp" required />
                        </div>

                        <!-- Input Alamat -->
                        <div class="mb-6">
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <input type="text" id="alamat" name="alamat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan alamat" required />
                        </div>

                        <!-- Input Dokter (Disabled) -->
                        <div class="mb-6">
                            <label for="dokter"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokter</label>
                            <input type="text" id="dokter" name="dokter"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 opacity-50 cursor-not-allowed"
                                value="{{ $dokter }}" readonly required />
                        </div>

                        <!-- Input Spesialis (Disabled) -->
                        <div class="mb-6">
                            <label for="spesialis"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Spesialis</label>
                            <input type="text" id="spesialis" name="spesialis"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 opacity-50 cursor-not-allowed"
                                value="{{ $spesialis }}" readonly required />
                        </div>

                        <!-- Input Hari -->
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
                                    @foreach ($days as $dayOption)
                                        <li>
                                            <p class="block text-white px-4 py-2 hover:bg-custom-blue cursor-pointer"
                                                onclick="setSelectedDay('{{ $dayOption }}')">
                                                {{ $dayOption }}
                                            </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <input type="hidden" id="hari" name="hari" value="{{ $selected_day ?? 'Senin' }}"
                            required />

                        <!-- Tombol Submit -->
                        <button type="submit"
                            class="text-white bg-custom-blue hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

<script>
    function setSelectedDay(day) {
        // Update teks tombol dropdown
        document.getElementById('pilihhari').textContent = day;

        // Update nilai input tersembunyi
        document.getElementById('hari').value = day;
    }
</script>
