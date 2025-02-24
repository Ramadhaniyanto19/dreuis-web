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
                        Daftar Dokter
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
            <div class="flex items-center">
                <form action="{{ route('dashboard-dokter.index') }}" method="GET" class="flex items-center">
                    <input type="text" id="search" name="search" placeholder="Search..."
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ request('search') }}">
                    <button type="submit"
                        class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Search
                    </button>
                    <a href="{{ route('dashboard-dokter.index') }}"
                        class="ml-2 px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">
                        Reset
                    </a>
                </form>
            </div>
            <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                Create
            </button>
        </div>

        <!-- Table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @if (!empty($doctors) && $doctors->count())
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">Gambar</th>
                            <th scope="col" class="px-6 py-3">Nama Dokter</th>
                            <th scope="col" class="px-6 py-3">Jadwal Dokter</th>
                            <th scope="col" class="px-6 py-3">NIP</th>
                            <th scope="col" class="px-6 py-3">Spesialis</th>
                            <th scope="col" class="px-6 py-3">Nomor Dokter</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-{{ $doctor->id }}" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-{{ $doctor->id }}"
                                            class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('storage/' . $doctor->image) }}" alt="{{ $doctor->name }}"
                                        class="w-10 h-10 rounded-full">
                                </td>
                                <td class="px-6 py-4">{{ $doctor->name }}</td>
                                <td>
                                    @foreach ($doctor->schedules as $schedule)
                                        <div>{{ $schedule->day }}: {{ $schedule->start_time }} -
                                            {{ $schedule->end_time }}</div>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4">{{ $doctor->nip }}</td>
                                <td class="px-6 py-4">{{ $doctor->specialization }}</td>
                                <td class="px-6 py-4">{{ $doctor->phone }}</td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="edit-btn font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        data-id="{{ $doctor->id }}" data-name="{{ $doctor->name }}"
                                        data-nip="{{ $doctor->nip }}"
                                        data-specialization="{{ $doctor->specialization }}"
                                        data-phone="{{ $doctor->phone }}" data-image="{{ $doctor->image }}">
                                        Edit
                                    </a>
                                    <form action="{{ route('dashboard-dokter.destroy', $doctor->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline ml-2">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="p-4 text-center text-gray-700 dark:text-gray-400">
                    Belum ada data dokter.
                </div>
            @endif
        </div>

        <!-- Main Modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden fixed inset-0 z-50 flex overflow-y-scroll items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
            <div class="relative p-4 w-full max-w-md bg-white rounded-lg shadow dark:bg-gray-800">
                <div class="flex justify-between items-center pb-3 border-b dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white" id="modal-title">Tambah Dokter</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 dark:hover:bg-gray-700 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center"
                        data-modal-toggle="crud-modal">
                        ✖
                    </button>
                </div>

                <!-- Form -->
                <form id="doctor-form" class="mt-4" action="{{ route('dashboard-dokter.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="doctor-id" name="id">
                    <div class="mb-4">
                        <label for="doctor-image"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Gambar Dokter</label>
                        <input type="file" id="doctor-image" name="image"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            accept="image/*">
                    </div>
                    <div class="mb-4">
                        <label for="doctor-name"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Dokter</label>
                        <input type="text" id="doctor-name" name="name"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="nip"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">NIP</label>
                        <input type="text" id="nip" name="nip"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="specialization"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Spesialis</label>
                        <input type="text" id="specialization" name="specialization"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nomor
                            Dokter</label>
                        <input type="text" id="phone" name="phone"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Jadwal Dokter</label>
                        <div id="schedules-container">
                            <div class="schedule-item flex gap-2 mb-2">
                                <select name="schedules[0][day]" class="border rounded-lg p-2">
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                                <input type="time" name="schedules[0][start_time]" class="border rounded-lg p-2">
                                <input type="time" name="schedules[0][end_time]" class="border rounded-lg p-2">
                                <button type="button"
                                    class="remove-schedule bg-red-500 text-white px-2 rounded-lg">Hapus</button>
                            </div>
                        </div>
                        <button type="button" id="add-schedule"
                            class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-lg">Tambah Jadwal</button>
                    </div>
                    <div class="flex justify-end gap-x-2">
                        <button type="button" data-modal-toggle="crud-modal"
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 focus:outline-none">Batal</button>
                        <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('add-schedule').addEventListener('click', function() {
            const container = document.getElementById('schedules-container');
            const index = container.children.length;
            const newSchedule = `
        <div class="schedule-item flex gap-2 mb-2">
            <select name="schedules[${index}][day]" class="border rounded-lg p-2">
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
            </select>
            <input type="time" name="schedules[${index}][start_time]" class="border rounded-lg p-2">
            <input type="time" name="schedules[${index}][end_time]" class="border rounded-lg p-2">
            <button type="button" class="remove-schedule bg-red-500 text-white px-2 rounded-lg">Hapus</button>
        </div>
    `;
            container.insertAdjacentHTML('beforeend', newSchedule);
        });

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-schedule')) {
                e.target.closest('.schedule-item').remove();
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('crud-modal');
            const modalTitle = document.getElementById('modal-title');
            const form = document.getElementById('doctor-form');
            const backdrop = document.createElement('div');
            backdrop.classList.add('fixed', 'inset-0', 'bg-black', 'bg-opacity-50', 'hidden', 'z-40');
            document.body.appendChild(backdrop);
            let isEdit = false;
            let editId = null;

            function closeModal() {
                modal.classList.add('hidden');
                backdrop.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
                form.reset();
                isEdit = false;
                editId = null;
                form.setAttribute('action', "{{ route('dashboard-dokter.store') }}");
                form.querySelector('input[name=_method]')?.remove();
            }

            document.querySelectorAll('[data-modal-toggle]').forEach(button => {
                button.addEventListener('click', () => {
                    modal.classList.toggle('hidden');
                    backdrop.classList.toggle('hidden');
                    if (!modal.classList.contains('hidden')) {
                        modalTitle.textContent = isEdit ? 'Edit Dokter' : 'Tambah Dokter';
                        document.body.classList.add('overflow-hidden');
                    } else {
                        closeModal();
                    }
                });
            });

            backdrop.addEventListener('click', closeModal);

            document.querySelectorAll('.edit-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    isEdit = true;
                    editId = this.dataset.id;
                    modalTitle.textContent = 'Edit Dokter';

                    document.getElementById('doctor-id').value = this.dataset.id;
                    document.getElementById('doctor-name').value = this.dataset.name;
                    document.getElementById('nip').value = this.dataset.nip;
                    document.getElementById('specialization').value = this.dataset.specialization;
                    document.getElementById('phone').value = this.dataset.phone;

                    form.setAttribute('action', `/dashboard-dokter/${editId}`);

                    if (!form.querySelector('input[name=_method]')) {
                        const methodInput = document.createElement('input');
                        methodInput.setAttribute('type', 'hidden');
                        methodInput.setAttribute('name', '_method');
                        methodInput.setAttribute('value', 'PATCH');
                        form.appendChild(methodInput);
                    }

                    modal.classList.remove('hidden');
                    backdrop.classList.remove('hidden');
                });
            });

            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    const confirmDelete = form.querySelector('[type=submit]').textContent.includes(
                        'Hapus');
                    if (confirmDelete && !confirm(
                            'Apakah Anda yakin ingin menghapus dokter ini?')) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
</x-partial-dashboard>
