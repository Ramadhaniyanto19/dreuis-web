<x-layout>
    <div class="flex flex-col w-full h-full items-center justify-center mb-28 gap-y-10">

        {{-- Carousel --}}
        <div id="default-carousel" class="relative w-full -mt-4" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out w-full h-full" data-carousel-item>
                    <img src="../assets/img1.jpg"
                        class="absolute block  -translate-x-1/2 object-cover -translate-y-1/2 top-1/2 left-1/2"
                        alt="Nature and Water">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out w-full h-full" data-carousel-item>
                    <img src="../assets/img2.jpg"
                        class="absolute block  -translate-x-1/2 object-cover -translate-y-1/2 top-1/2 left-1/2"
                        alt="City at Night">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out w-full h-full" data-carousel-item>
                    <img src="../assets/img1.jpg"
                        class="absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Mountains and Sky">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-custom-green dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-custom-green dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        {{-- Jadwal Dokter --}}
        <div class="flex md:flex-row md:px-16 flex-col w-full items-center justify-center gap-x-10 gap-y-4">
            {{-- Optional --}}
            {{-- <div class="flex flex-col h-96 items-center justify-center bg-white w-[90%] shadow-xl">
                <h1 class="text-2xl font-bold text-custom-blue text-center">RS DR EUIS</h1>
                <p class="text-center text-base">RS Dr. Euis menjadi pilihan karena kombinasi kualitas layanan kesehatan
                    yang unggul dan pelayanan
                    yang ramah serta profesional. Rumah sakit ini dikenal dengan fasilitas medis yang modern dan
                    lengkap, didukung oleh tenaga medis berpengalaman, seperti dokter spesialis, perawat, dan staf yang
                    berkomitmen memberikan pelayanan terbaik.</p>
            </div> --}}
            <div class="flex flex-col w-[90%] md:w-1/2 h-auto pb-10 border rounded-lg bg-white shadow-lg">
                <div class="flex flex-col items-center mt-4 justify-center my-4 text-center gap-y-4">
                    <h2 class="text-3xl font-bold text-custom-blue">Cari Jadwal Dokter</h2>
                    <p class="text-sm text-custom-green w-80">Temukan jadwal dokter yang sesuai dengan kebutuhan Anda.
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
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[39%] w-[80%] dark:bg-custom-blue h-32 overflow-y-scroll">
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
                            <button id="dropdownDelayButton" data-dropdown-toggle="pilihHari"
                                data-dropdown-delay="500" data-dropdown-trigger="hover"
                                class="text-slate-600 w-[94%] bg-white border border-gray-300 hover:bg-custom-green focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg hover:text-white text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 relative"
                                type="button">Pilih Hari<svg class="w-2.5 h-2.5 absolute right-2 "
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="pilihHari"
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[39%] w-[80%] dark:bg-custom-blue h-32 overflow-y-scroll">
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
                                type="button">Pilih Hari<svg class="w-2.5 h-2.5 absolute right-2 "
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="pilihDokter"
                                class="z-10 hidden bg-custom-green text-white divide-y divide-gray-100 rounded-lg shadow md:w-[39%] w-[80%] dark:bg-custom-blue h-32 overflow-y-scroll">
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

            {{-- List Dokter --}}
            <div
                class="grid md:grid-cols-2 md:gap-8 gap-4 grid-cols-1 md:w-auto w-full md:justify-items-start justify-items-center items-center">
                <div class="flex md:hidden gap-y-2 flex-row items-center px-7 w-full justify-between">
                    <div class="flex flex-col w-[50%]">
                        <h1 class="text-lg font-bold text-custom-blue">Dokter Kami</h1>
                    </div>
                    <div class="flex flex-col items-center gap-y-1 pl-14 justify-center w-[50%]">
                        <a href="#"
                            class="text-center text-custom-green items-center justify-center flex  font-semibold rounded-lg text-sm"
                            type="button">Lihat Lainnya</a>
                        <div class="w-20 h-0.5 bg-gradient-to-l from-custom-blue to-custom-green"></div>
                    </div>
                </div>
                <div class="flex flex-col md:w-60 pb-4 w-[90%] rounded-xl h-60 bg-white shadow-xl border gap-y-1">
                    <img src="https://img.freepik.com/free-photo/lifestyle-beauty-fashion-people-emotions-concept-young-asian-female-office-manager-ceo-with-pleased-expression-standing-white-background-smiling-with-arms-crossed-chest_1258-59329.jpg?t=st=1733417222~exp=1733420822~hmac=b7bd733c6b0df5fa6c70c98a8556d59ee295840862609b30ac3ba280eda8b4bb&w=996"
                        class="w-40 h-40 rounded-full mx-auto mt-0.5" alt="" />
                    <p class="text-center text-custom-green font-semibold">Drs Miranda lestari S.Kep</p>
                    <p class="text-center text-custom-blue font-semibold">Spesialis Anak</p>
                    <button
                        class="text-center bg-custom-green items-center justify-center flex text-white font-semibold px-5 py-2  rounded-lg mx-auto">Lihat
                        Jadwal</button>
                </div>
                <div class="flex flex-col md:w-60 pb-4 w-[90%] rounded-xl h-60 bg-white shadow-xl border gap-y-1">
                    <img src="https://img.freepik.com/free-photo/lifestyle-beauty-fashion-people-emotions-concept-young-asian-female-office-manager-ceo-with-pleased-expression-standing-white-background-smiling-with-arms-crossed-chest_1258-59329.jpg?t=st=1733417222~exp=1733420822~hmac=b7bd733c6b0df5fa6c70c98a8556d59ee295840862609b30ac3ba280eda8b4bb&w=996"
                        class="w-40 h-40 rounded-full mx-auto mt-0.5" alt="" />
                    <p class="text-center text-custom-green font-semibold">Drs Miranda lestari S.Kep</p>
                    <p class="text-center text-custom-blue font-semibold">Spesialis Anak</p>
                    <button
                        class="text-center bg-custom-green items-center justify-center flex text-white font-semibold px-5 py-2  rounded-lg mx-auto">Lihat
                        Jadwal</button>
                </div>
                <div class="flex flex-col md:w-60 pb-4 w-[90%] rounded-xl h-60 bg-white shadow-xl border gap-y-1">
                    <img src="https://img.freepik.com/free-photo/lifestyle-beauty-fashion-people-emotions-concept-young-asian-female-office-manager-ceo-with-pleased-expression-standing-white-background-smiling-with-arms-crossed-chest_1258-59329.jpg?t=st=1733417222~exp=1733420822~hmac=b7bd733c6b0df5fa6c70c98a8556d59ee295840862609b30ac3ba280eda8b4bb&w=996"
                        class="w-40 h-40 rounded-full mx-auto mt-0.5" alt="" />
                    <p class="text-center text-custom-green font-semibold">Drs Miranda lestari S.Kep</p>
                    <p class="text-center text-custom-blue font-semibold">Spesialis Anak</p>
                    <button
                        class="text-center bg-custom-green items-center justify-center flex text-white font-semibold px-5 py-2  rounded-lg mx-auto">Lihat
                        Jadwal</button>
                </div>
                <div class="flex flex-col md:w-60 pb-4 w-[90%] rounded-xl h-60 bg-white shadow-xl border gap-y-1">
                    <img src="https://img.freepik.com/free-photo/lifestyle-beauty-fashion-people-emotions-concept-young-asian-female-office-manager-ceo-with-pleased-expression-standing-white-background-smiling-with-arms-crossed-chest_1258-59329.jpg?t=st=1733417222~exp=1733420822~hmac=b7bd733c6b0df5fa6c70c98a8556d59ee295840862609b30ac3ba280eda8b4bb&w=996"
                        class="w-40 h-40 rounded-full mx-auto mt-0.5" alt="" />
                    <p class="text-center text-custom-green font-semibold">Drs Miranda lestari S.Kep</p>
                    <p class="text-center text-custom-blue font-semibold">Spesialis Anak</p>
                    <button
                        class="text-center bg-custom-green items-center justify-center flex text-white font-semibold px-5 py-2  rounded-lg mx-auto">Lihat
                        Jadwal</button>
                </div>
                {{-- <a href="#"
                    class="text-center bg-gradient-to-tr md:hidden from-custom-green to-custom-blue items-center justify-center flex text-white font-semibold px-5 py-2  rounded-lg"
                    type="button">Lihat Dokter
                    Lainnya</a> --}}
            </div>
        </div>

        {{-- List Promo --}}
        <div class="flex flex-col items-center w-full justify-center gap-y-4">
            <div class="flex flex-row justify-between px-7 md:px-0 md:flex-col w-full md:justify-center items-center">
                <div class="flex flex-col">
                    <h1 class="text-lg text-center md:text-2xl font-bold text-custom-blue">Promo Tersedia</h1>
                    <div class="w-20 md:w-60 h-0.5 md:flex hidden bg-gradient-to-l from-custom-blue to-custom-green">
                    </div>
                </div>
                <div class="flex flex-col md:hidden">
                    <a href="#" class="text-center md:text-base text-sm text-custom-green">Lihat Lainnya</a>
                    <div class="w-20 md:w-60 h-0.5 bg-gradient-to-l from-custom-blue to-custom-green"></div>
                </div>
            </div>
            <div class="grid md:grid-cols-3 grid-cols-1 gap-4 w-[90%] h-full items-center justify-center">
                <div class="flex flex-col w-full h-full rounded-xl items-center justify-center bg-white shadow-xl border gap-y-1 cursor-pointer"
                    data-modal-target="static-modal" data-modal-toggle="static-modal">
                    <img src="../assets/img1.jpg" width="100%" height="100%" class="bg-cover rounded-xl"
                        alt="">
                </div>
                <div
                    class="flex flex-col w-full h-full rounded-xl items-center justify-center bg-white shadow-xl border gap-y-1">
                    <img src="../assets/img1.jpg" width="100%" height="100%" class="bg-cover rounded-xl"
                        alt="">
                </div>
                <div
                    class="flex flex-col w-full h-full rounded-xl items-center justify-center bg-white shadow-xl border gap-y-1">
                    <img src="../assets/img1.jpg" width="100%" height="100%" class="bg-cover rounded-xl"
                        alt="">
                </div>
            </div>
            <a href="#"
                class="hidden text-center bg-gradient-to-tr from-custom-green to-custom-blue items-center justify-center md:flex text-white font-semibold px-5 py-2  rounded-lg"
                type="button">Lihat Promo
                Lainnya</a>
        </div>

        {{-- Modal Promo --}}
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
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
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
                            pasien baru</p>
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

        <div class="flex flex-col w-full h-auto justify-center items-center gap-y-4">
            <div class="flex md:flex-col justify-between md:justify-center items-center w-full px-8">
                <h1 class="text-custom-blue md:text-center text-xl font-bold md:text-2xl">Artikel Terkini</h1>
                <div class="w-44 h-0.5 bg-gradient-to-l from-custom-blue to-custom-green md:block hidden"></div>
                <div class="flex flex-col md:hidden">
                    <a href="#"
                        class="text-center text-custom-green items-center justify-center flex  font-semibold rounded-lg text-sm"
                        type="button">Lihat Lainnya</a>
                    <div class="w-20 h-0.5 bg-gradient-to-l from-custom-blue to-custom-green"></div>
                </div>
            </div>
            <div class="flex w-full overflow-x-auto">
                <div
                    class="grid md:flex gap-8 px-4 md:overflow-x-auto  [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar]:h-0.5
                        pb-10
                        [&::-webkit-scrollbar-track]:bg-gray-100
                        [&::-webkit-scrollbar-thumb]:bg-gray-300
                        dark:[&::-webkit-scrollbar-track]:bg-neutral-700
                        dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <!-- Artikel 1 -->
                    <div class="flex-shrink-0 w-full md:w-[300px] h-auto rounded-xl bg-white shadow-xl border p-4">
                        <img src="../assets/img1.jpg" alt="Thumbnail Artikel"
                            class="w-full h-48 object-cover rounded-t-xl mb-4">
                        <h3 class="text-lg font-semibold text-custom-blue">Judul Artikel Pertama</h3>
                        <p class="text-sm text-gray-600 mt-2">
                            Ini adalah ringkasan atau deskripsi singkat dari artikel pertama. Isi artikel memberikan
                            informasi bermanfaat.
                        </p>
                        <div class="flex mt-4">
                            <a href="#"
                                class="flex items-center text-custom-green font-semibold hover:underline justify-center gap-x-2">
                                <span>Baca Selengkapnya</span>
                                <x-bi-arrow-right-circle-fill />
                            </a>
                        </div>
                    </div>

                    <!-- Artikel 2 -->
                    <div class="flex-shrink-0 w-full md:w-[300px] h-auto rounded-xl bg-white shadow-xl border p-4">
                        <img src="../assets/img2.jpg" alt="Thumbnail Artikel"
                            class="w-full h-48 object-cover rounded-t-xl mb-4">
                        <h3 class="text-lg font-semibold text-custom-blue">Judul Artikel Kedua</h3>
                        <p class="text-sm text-gray-600 mt-2">
                            Ini adalah ringkasan atau deskripsi singkat dari artikel kedua. Artikel ini memberikan
                            wawasan
                            menarik.
                        </p>
                        <div class="flex mt-4">
                            <a href="#"
                                class="flex items-center text-custom-green font-semibold hover:underline justify-center gap-x-2">
                                <span>Baca Selengkapnya</span>
                                <x-bi-arrow-right-circle-fill />
                            </a>
                        </div>
                    </div>

                    <!-- Artikel 3 -->
                    <div class="flex-shrink-0 w-full md:w-[300px] h-auto rounded-xl bg-white shadow-xl border p-4">
                        <img src="../assets/img1.jpg" alt="Thumbnail Artikel"
                            class="w-full h-48 object-cover rounded-t-xl mb-4">
                        <h3 class="text-lg font-semibold text-custom-blue">Judul Artikel Ketiga</h3>
                        <p class="text-sm text-gray-600 mt-2 text-justify">
                            Ini adalah ringkasan atau deskripsi singkat dari artikel ketiga. Informasi ini sangat
                            berguna
                            untuk pembaca.
                        </p>
                        <div class="flex mt-4">
                            <a href="#"
                                class="flex items-center text-custom-green font-semibold hover:underline justify-center gap-x-2">
                                <span>Baca Selengkapnya</span>
                                <x-bi-arrow-right-circle-fill />
                            </a>
                        </div>
                    </div>

                    <!-- Artikel 4 -->
                    <div class="flex-shrink-0 w-full md:w-[300px] h-auto rounded-xl bg-white shadow-xl border p-4">
                        <img src="../assets/img1.jpg" alt="Thumbnail Artikel"
                            class="w-full h-48 object-cover rounded-t-xl mb-4">
                        <h3 class="text-lg font-semibold text-custom-blue">Judul Artikel Keempat</h3>
                        <p class="text-sm text-gray-600 mt-2 text-justify">
                            Ini adalah ringkasan atau deskripsi singkat dari artikel keempat. Informasi ini sangat
                            berguna
                            untuk pembaca.
                        </p>
                        <div class="flex mt-4">
                            <a href="#"
                                class="flex items-center text-custom-green font-semibold hover:underline justify-center gap-x-2">
                                <span>Baca Selengkapnya</span>
                                <x-bi-arrow-right-circle-fill />
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-full md:w-[300px] h-auto rounded-xl bg-white shadow-xl border p-4">
                        <img src="../assets/img1.jpg" alt="Thumbnail Artikel"
                            class="w-full h-48 object-cover rounded-t-xl mb-4">
                        <h3 class="text-lg font-semibold text-custom-blue">Judul Artikel Keempat</h3>
                        <p class="text-sm text-gray-600 mt-2 text-justify">
                            Ini adalah ringkasan atau deskripsi singkat dari artikel keempat. Informasi ini sangat
                            berguna
                            untuk pembaca.
                        </p>
                        <div class="flex mt-4">
                            <a href="#"
                                class="flex items-center text-custom-green font-semibold hover:underline justify-center gap-x-2">
                                <span>Baca Selengkapnya</span>
                                <x-bi-arrow-right-circle-fill />
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-full md:w-[300px] h-auto rounded-xl bg-white shadow-xl border p-4">
                        <img src="../assets/img1.jpg" alt="Thumbnail Artikel"
                            class="w-full h-48 object-cover rounded-t-xl mb-4">
                        <h3 class="text-lg font-semibold text-custom-blue">Judul Artikel Keempat</h3>
                        <p class="text-sm text-gray-600 mt-2 text-justify">
                            Ini adalah ringkasan atau deskripsi singkat dari artikel keempat. Informasi ini sangat
                            berguna
                            untuk pembaca.
                        </p>
                        <div class="flex mt-4">
                            <a href="#"
                                class="flex items-center text-custom-green font-semibold hover:underline justify-center gap-x-2">
                                <span>Baca Selengkapnya</span>
                                <x-bi-arrow-right-circle-fill />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#"
                class="hidden text-center bg-gradient-to-tr from-custom-green to-custom-blue items-center justify-center md:flex text-white font-semibold px-5 py-2  rounded-lg"
                type="button">Lihat Artikel
                Lainnya</a>
        </div>
    </div>

</x-layout>
