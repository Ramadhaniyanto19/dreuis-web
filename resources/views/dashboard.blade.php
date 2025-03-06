<x-partial-dashboard>


    <div class="flex flex-col h-full w-full gap-y-3">

        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-lg font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-5 h-5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Dashboard
                    </a>
                </li>

            </ol>
        </nav>

        <div class="flex flex-col">
            <h3>Selamat Datang Di Dashboard Dreuis!</h3>
        </div>

        <div class="flex flex-row gap-x-4 justify-evenly">
            <div
                class="flex flex-row items-center justify-center border rounded-lg w-72 h-32 bg-white shadow-lg  gap-y-2">
                <x-fontisto-doctor class="w-14 h-14 text-custom-green" />
                <div class="flex flex-col items-center justify-center gap-x-12">
                    <h2 class="text-base font-bold text-slate-500">Jumlah Dokter</h2>
                    <p class="text-xl font-bold text-slate-500">20</p>
                </div>
            </div>
            <div
                class="flex flex-row items-center justify-center border rounded-lg w-72 h-32 bg-white shadow-lg  gap-y-2">
                <x-hugeicons-promotion class="w-14 h-14 text-custom-green" />
                <div class="flex flex-col items-center justify-center gap-x-12">
                    <h2 class="text-base font-bold text-slate-500">Jumlah Promo</h2>
                    <p class="text-xl font-bold text-slate-500">22</p>
                </div>
            </div>
            <div
                class="flex flex-row items-center justify-center border rounded-lg w-72 h-32 bg-white shadow-lg  gap-y-2">
                <x-fluentui-news-20 class="w-14 h-14 text-custom-green" />
                <div class="flex flex-col items-center justify-center gap-x-12">
                    <h2 class="text-base font-bold text-slate-500">Riwayat Janji</h2>
                    <p class="text-xl font-bold text-slate-500">10</p>
                </div>
            </div>
        </div>

    </div>
</x-partial-dashboard>
