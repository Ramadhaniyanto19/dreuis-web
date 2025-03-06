<x-partial-dashboard>
    <div class="flex flex-col h-full w-full gap-y-3">
        <!-- Breadcrumb -->
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
                        Daftar Promo
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
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Search and Create Buttons -->
        <div class="flex justify-between items-center mb-4">
            <form action="{{ route('dashboard-promo.index') }}" method="GET" class="flex items-center gap-2">
                <input type="text" name="search" placeholder="Cari Promo..."
                    class="px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                    value="{{ request('search') }}">
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Cari</button>
                <a href="{{ route('dashboard-promo.index') }}"
                    class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Reset</a>
            </form>
            <button id="openModal" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Tambah
                Promo</button>
        </div>

        <!-- Modal untuk Tambah/Edit Promo -->
        <div id="crud-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-lg font-semibold mb-4" id="modal-title">Tambah Promo</h2>
                <form id="promo-form" action="{{ route('dashboard-promo.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="promo-id" name="id">
                    <div class="mb-4">
                        <label class="block">Nama Promo</label>
                        <input type="text" id="promoName" name="promoName" class="w-full px-4 py-2 border rounded-lg"
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block">Deskripsi</label>
                        <textarea id="desc_promo" name="desc_promo" class="w-full px-4 py-2 border rounded-lg"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block">Gambar Promo</label>
                        <input type="file" id="gambar" name="gambar" class="w-full px-4 py-2 border rounded-lg">
                    </div>
                    <div class="flex gap-4">
                        <div class="mb-4 w-1/2">
                            <label class="block">Start Date</label>
                            <input type="date" id="start_promo" name="start_promo"
                                class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div class="mb-4 w-1/2">
                            <label class="block">End Date</label>
                            <input type="date" id="end_promo" name="end_promo"
                                class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2">
                        <button type="button" id="closeModal"
                            class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Batal</button>
                        <button type="submit"
                            class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabel Promo -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @if (!empty($promos) && $promos->count())
                <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                    <thead class="bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">Gambar</th>
                            <th class="px-6 py-3">Nama Promo</th>
                            <th class="px-6 py-3">Deskripsi</th>
                            <th class="px-6 py-3">Periode</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($promos as $promo)
                            <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4"><img src="{{ asset('storage/' . $promo->gambar) }}"
                                        alt="{{ $promo->promoName }}" class="w-10 h-10 rounded-full"></td>
                                <td class="px-6 py-4">{{ $promo->promoName }}</td>
                                <td class="px-6 py-4">{{ $promo->desc_promo }}</td>
                                <td class="px-6 py-4">{{ $promo->start_promo }} - {{ $promo->end_promo }}</td>
                                <td class="px-6 py-4 flex gap-2">
                                    <a href="#" class="edit-btn text-blue-600 hover:underline"
                                        data-id="{{ $promo->id }}" data-promoName="{{ $promo->promoName }}"
                                        data-desc_promo="{{ $promo->desc_promo }}"
                                        data-start_promo="{{ $promo->start_promo }}"
                                        data-end_promo="{{ $promo->end_promo }}" data-gambar="{{ $promo->gambar }}">
                                        Edit
                                    </a>
                                    <form action="{{ route('dashboard-promo.destroy', $promo->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="p-4 text-center text-gray-700 dark:text-gray-400">Belum ada data promo.</div>
            @endif
        </div>
    </div>

    <script>
        // Modal Logic
        const openModalButton = document.getElementById('openModal');
        const closeModalButton = document.getElementById('closeModal');
        const modal = document.getElementById('crud-modal');
        const promoForm = document.getElementById('promo-form');
        const modalTitle = document.getElementById('modal-title');
        const promoIdInput = document.getElementById('promo-id');

        openModalButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
            modalTitle.textContent = 'Tambah Promo';
            promoForm.reset();
            promoForm.setAttribute('action', "{{ route('dashboard-promo.store') }}");
            promoIdInput.value = '';
        });

        closeModalButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        // Edit Logic
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function() {
                modal.classList.remove('hidden');
                modalTitle.textContent = 'Edit Promo';

                const promoId = this.dataset.id;
                const promoName = this.dataset.promoname;
                const descPromo = this.dataset.desc_promo;
                const startPromo = this.dataset.start_promo;
                const endPromo = this.dataset.end_promo;
                const gambar = this.dataset.gambar;

                document.getElementById('promo-id').value = promoId;
                document.getElementById('promoName').value = promoName;
                document.getElementById('desc_promo').value = descPromo;
                document.getElementById('start_promo').value = startPromo;
                document.getElementById('end_promo').value = endPromo;

                promoForm.setAttribute('action', `/dashboard-promo/${promoId}`);
                promoForm.insertAdjacentHTML('beforeend',
                    '<input type="hidden" name="_method" value="PUT">');
            });
        });

        // Delete Confirmation
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    if (form.querySelector('[type=submit]').textContent.includes('Hapus') &&
                        !confirm('Apakah Anda yakin ingin menghapus promo ini?')) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
</x-partial-dashboard>
