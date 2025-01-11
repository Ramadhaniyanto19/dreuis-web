<x-layout>
    <div class="flex flex-col w-full h-full items-center justify-center mb-28 gap-y-10 -mt-4">
        {{-- <div class="flex flex-col items-center justify-center bg-cover bg-no-repeat w-full h-[450px] relative"
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
        </div> --}}
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

                        {{-- Pilih Hari --}}
                        <div class="flex flex-col gap-y-2">
                            <p class="text-slate-700 text-base">Pilih hari</p>
                            <button id="dropdownDelayButton" data-dropdown-toggle="pilihHari" data-dropdown-delay="500"
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
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDelayButton">
                                    <li>
                                        <a href="#"
                                            class="block text-white px-4 py-2 hover:bg-custom-blue">Hari</a>
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

                        {{-- Pilih Dokter --}}
                        <div class="flex flex-col gap-y-2 w-full">
                            <p class="text-slate-700 text-base">Pilih Dokter</p>
                            <button id="dropdownDelayButton" data-dropdown-toggle="pilihDokter"
                                data-dropdown-delay="500" data-dropdown-trigger="hover"
                                class="text-slate-600 w-[94%] bg-white border border-gray-300 hover:bg-custom-green focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg hover:text-white text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 relative"
                                type="button">Pilih Hari<svg class="w-2.5 h-2.5 absolute right-2 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="pilihDokter"
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[83%] w-[80%] dark:bg-custom-blue h-32 overflow-y-scroll">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDelayButton">
                                    <li>
                                        <a href="#" class="block text-white px-4 py-2 hover:bg-custom-blue">Drs
                                            Mira</a>
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

                        <button type="submit"
                            class="bg-custom-blue mt-4 hover:bg-custom-green text-white font-bold w-[94%] h-12 rounded-xl ">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-4 grid-cols-1 gap-4 md:px-12">
            <div
                class="flex flex-col gap-y-2 bg-white shadow-xl rounded-xl border-slate-100 w-80 md:w-72 h-80 items-center justify-center">
                <img src="https://img.freepik.com/free-photo/lifestyle-beauty-fashion-people-emotions-concept-young-asian-female-office-manager-ceo-with-pleased-expression-standing-white-background-smiling-with-arms-crossed-chest_1258-59329.jpg?t=st=1733417222~exp=1733420822~hmac=b7bd733c6b0df5fa6c70c98a8556d59ee295840862609b30ac3ba280eda8b4bb&w=996"
                    class="w-40 h-40 rounded-full mx-auto mt-0.5" alt="" />
                <p class="text-center text-custom-green font-semibold">Drs Miranda lestari S.Kep</p>
                <p class="text-center text-custom-blue font-semibold">Spesialis Anak</p>
                <button
                    class="text-center bg-gradient-to-tr from-custom-blue to-custom-green items-center justify-center flex text-white font-semibold px-5 py-2  rounded-lg mx-auto">Lihat
                    Jadwal</button>
            </div>
            <div
                class="flex flex-col gap-y-2 bg-white shadow-xl rounded-xl border-slate-100 w-80 md:w-72 h-80 items-center justify-center">
                <img src="https://img.freepik.com/free-photo/lifestyle-beauty-fashion-people-emotions-concept-young-asian-female-office-manager-ceo-with-pleased-expression-standing-white-background-smiling-with-arms-crossed-chest_1258-59329.jpg?t=st=1733417222~exp=1733420822~hmac=b7bd733c6b0df5fa6c70c98a8556d59ee295840862609b30ac3ba280eda8b4bb&w=996"
                    class="w-40 h-40 rounded-full mx-auto mt-0.5" alt="" />
                <p class="text-center text-custom-green font-semibold">Drs Miranda lestari S.Kep</p>
                <p class="text-center text-custom-blue font-semibold">Spesialis Anak</p>
                <button
                    class="text-center bg-gradient-to-tr from-custom-blue to-custom-green items-center justify-center flex text-white font-semibold px-5 py-2  rounded-lg mx-auto">Lihat
                    Jadwal</button>
            </div>

        </div>
    </div>
</x-layout>
