<x-partial-dashboard>
    <div class="flex flex-col h-full w-full gap-y-3">
        <!-- Breadcrumb -->
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{ route('dashboard-berita.index') }}"
                        class="inline-flex items-center text-lg font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-5 h-5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Daftar Berita
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-lg font-medium text-gray-500 md:ms-2 dark:text-gray-400">Edit
                            Berita</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Form Edit Berita -->
        <form id="berita-form" action="{{ route('dashboard-berita.update', $berita->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="judul" class="block text-gray-700">Judul Berita</label>
                <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded-lg"
                    value="{{ $berita->judul }}" required>
            </div>
            <div class="mb-4">
                <label for="penulis" class="block text-gray-700">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="w-full px-4 py-2 border rounded-lg"
                    value="{{ $berita->penulis }}" required>
            </div>
            <div class="mb-4">
                <label for="isi" class="block text-gray-700">Isi Berita</label>
                <!-- Container untuk Quill Editor -->
                <div id="editor" style="height: 300px;">{!! $berita->isi !!}</div>
                <!-- Input tersembunyi untuk menyimpan konten HTML -->
                <input type="hidden" name="isi" id="isi">
            </div>
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Gambar Berita</label>
                <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded-lg">
                @if ($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                        class="w-20 h-20 mt-2">
                @endif
            </div>
            <div class="flex justify-end gap-2">
                <a href="{{ route('dashboard-berita.index') }}"
                    class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Batal</a>
                <button type="submit"
                    class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Simpan</button>
            </div>
        </form>
    </div>

    <!-- QuillJS Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const quill = new Quill("#editor", {
                theme: "snow",
                modules: {
                    toolbar: [
                        [{
                            header: [1, 2, 3, false]
                        }],
                        ["bold", "italic", "underline", "strike"],
                        [{
                            list: "ordered"
                        }, {
                            list: "bullet"
                        }],
                        ["link", "image"],
                        ["clean"],
                    ],
                },
                placeholder: "Tulis isi berita di sini...",
            });

            // Set nilai awal Quill dengan konten dari database
            quill.root.innerHTML = `{!! $berita->isi !!}`;

            const form = document.getElementById("berita-form");
            const isiInput = document.getElementById("isi");

            form.addEventListener("submit", function(event) {
                // Simpan konten HTML dari Quill ke input tersembunyi
                isiInput.value = quill.root.innerHTML;
                console.log("Isi Berita:", isiInput.value); // Debug: Cek nilai isi
            });
        });
    </script>
</x-partial-dashboard>
