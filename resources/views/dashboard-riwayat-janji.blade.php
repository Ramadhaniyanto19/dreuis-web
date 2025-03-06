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
                        Riwayat Janji
                    </a>
                </li>
            </ol>
        </nav>

        <!-- Notifikasi -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <!-- Search and Export Buttons -->
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center">
                <form action="{{ route('riwayat-janji.index') }}" method="GET" class="flex items-center">
                    <input type="text" id="search" name="search" placeholder="Cari berdasarkan nama atau NIP..."
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ request('search') }}">
                    <button type="submit"
                        class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Cari
                    </button>
                    <a href="{{ route('riwayat-janji.index') }}"
                        class="ml-2 px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">
                        Reset
                    </a>
                </form>
            </div>
            <a href="{{ route('riwayat-janji.export', ['search' => request('search')]) }}"
                class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                Export PDF
            </a>
        </div>

        <!-- Table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @if ($appointments->count())
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama Pasien</th>
                            <th scope="col" class="px-6 py-3">Nomor HP</th>
                            <th scope="col" class="px-6 py-3">Alamat</th>
                            <th scope="col" class="px-6 py-3">Dokter</th>
                            <th scope="col" class="px-6 py-3">Spesialis</th>
                            <th scope="col" class="px-6 py-3">Hari</th>
                            <th scope="col" class="px-6 py-3">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">{{ $appointment->nama }}</td>
                                <td class="px-6 py-4">{{ $appointment->nomor_hp }}</td>
                                <td class="px-6 py-4">{{ $appointment->alamat }}</td>
                                <td class="px-6 py-4">{{ $appointment->dokter }}</td>
                                <td class="px-6 py-4">{{ $appointment->spesialis }}</td>
                                <td class="px-6 py-4">{{ $appointment->hari }}</td>
                                <td class="px-6 py-4">{{ $appointment->created_at?->format('d-m-y H:i') ?? 'N/A' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="p-4 text-center text-gray-700 dark:text-gray-400">
                    Belum ada riwayat janji.
                </div>
            @endif
        </div>
        <div class="mt-4">
            {{ $appointment->links() }}
        </div>
    </div>

</x-partial-dashboard>
