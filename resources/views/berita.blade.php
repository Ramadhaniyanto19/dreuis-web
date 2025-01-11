<x-layout>
    <div class="flex flex-col w-full h-full items-center justify-center mb-28 gap-y-10 -mt-4">
        <div class="flex flex-col items-center justify-center bg-cover bg-no-repeat w-full h-[450px] relative"
            style="background-image: url(../assets/promo.jpg)">
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
                                <span
                                    class="ms-1 text-sm text-white font-semibold md:ms-2 dark:text-gray-400">Berita</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-2xl font-bold text-custom-green mt-4">Berita</h1>
            </div>
        </div>
        <div class="flex flex-col px-8 w-full h-fulll">
            <div class="flex flex-col items-center justify-center mb-4">
                <h1 class=" text-lg md:text-2xl font-bold text-custom-blue">Berita Terkini</h1>
            </div>
            <div class="grid md:grid-cols-4 gap-8 w-full">
                <div class="flex-shrink-0 w-full md:w-[300px] h-auto rounded-xl bg-white shadow-xl border p-4">
                    <img src="../assets/berita1.jpg" alt="Thumbnail Artikel"
                        class="w-full h-48 object-cover rounded-t-xl mb-4">
                    <h3 class="text-lg font-semibold text-custom-blue">Pelayanan Kesehatan Adalah Dukungan
                        Pemeliharaan Kesehatan</h3>
                    <p class="text-sm text-gray-600 mt-2">
                        Pelayanan kesehatan adalah setiap upaya untuk memelihara dan meningkatkan kesehatan serta
                        mencegah dan menyembuhkan penyakit masyarakat.

                    </p>
                    <div class="flex mt-4">
                        <a href="/detail-berita"
                            class="flex items-center text-custom-green font-semibold hover:underline justify-center gap-x-2">
                            <span>Baca Selengkapnya</span>
                            <x-bi-arrow-right-circle-fill />
                        </a>
                    </div>
                </div>
            </div>
        </div>


        {{-- Modal NI --}}
        <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Promo Terkini
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="static-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <img src="../assets/img1.jpg" class="w-full h-64" alt="" />
                        <p class="text-sm md:text-base">Dapatkan promo 50% untuk pendaftaran online di RS DR Euis untuk
                            pasien baru lorem</p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <a href="#">
                            <button data-modal-hide="static-modal" type="button"
                                class="text-white w-full bg-gradient-to-tr from-custom-green to-custom-blue hover:bg-custom-green focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-32 md:px-64 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Dapatkan
                                Promo</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
