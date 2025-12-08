@extends('user.user')

@section('content')
    <div class=" sm:ml-64">
        <div class="p-4 rounded-lg mt-14">

            <div x-data="{ open: false }"> <!-- ✅ Bungkus semua konten di dalam x-data -->

                <header class=" p-5 flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-gray-800">Dashboard Jurnalis</h1>
                    <div @click="open = true"
                        class="p-2 bg-blue-500 rounded-lg text-white flex items-center gap-1 cursor-pointer hover:bg-blue-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Tambah Artikel</span>
                    </div>
                </header>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-white p-5 rounded-xl shadow text-center">
                        <p class="text-gray-500 text-sm">Total Artikel</p>
                        <h2 class="text-3xl font-bold text-gray-700 mt-1">{{ $totalberita }}</h2>
                    </div>
                    <div class="bg-white p-5 rounded-xl shadow text-center">
                        <p class="text-gray-500 text-sm">Artikel Terbit</p>
                        <h2 class="text-3xl font-bold text-green-600 mt-1">85</h2>
                    </div>
                    <div class="bg-white p-5 rounded-xl shadow text-center">
                        <p class="text-gray-500 text-sm">Menunggu Review</p>
                        <h2 class="text-3xl font-bold text-yellow-600 mt-1">25</h2>
                    </div>
                    <div class="bg-white p-5 rounded-xl shadow text-center">
                        <p class="text-gray-500 text-sm">Total Pembaca</p>
                        <h2 class="text-3xl font-bold text-blue-600 mt-1">34.520</h2>
                    </div>
                </div>

                <!-- Artikel Terbaru -->
                <section class="bg-white mt-10 p-6 rounded-xl shadow">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Artikel Terbaru</h2>
                    <table class="w-full table-auto text-left text-gray-700">
                        <thead>
                            <tr class="border-b text-sm text-gray-500">
                                <th>no</th>
                                <th class="py-2">Judul</th>
                                <th class="py-2">Status</th>
                                <th class="py-2">Tanggal</th>
                                <th class="py-2 text-right">Pembaca</th>
                                <th class="px-5 text-center">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beritas as $berita)
                                <tr class="border-b hover:bg-gray-50">
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="py-3">{{ $berita->judul }}</td>
                                    <td>
                                        <span
                                            class="
                                                        text-sm px-2 py-1 rounded
                                                        {{ $berita->status == 'published' ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-700' }}
                                                    ">
                                            {{ $berita->status }}
                                        </span>
                                    </td>

                                    <td>3 {{ $berita->tanggal }}</td>
                                    <td class="text-right">2.310</td>
                                    <td class="px-4 py-2 text-center flex items-center justify-center gap-3">

                                        @if ($berita->status == 'draft')
                                            <a onclick="openEditForm({{ $berita->id }})"
                                                class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded flex items-center justify-center w-10 h-10 cursor-pointer">
                                                <svg ...></svg>
                                            </a>
                                        @endif
                                        <!-- Tombol Edit (ICON SAJA) -->

                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" onclick="return confirm('Yakin mau hapus?')"
                                                class="bg-red-500 hover:bg-red-600 text-white p-2 rounded flex items-center gap-2">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                    viewBox="0 0 640 640">
                                                    <path fill="white"
                                                        d="M232.7 69.9L224 96L128 96C110.3 96 96 110.3 96 128C96 145.7 110.3 160 128 160L512 160C529.7 160 544 145.7 544 128C544 110.3 529.7 96 512 96L416 96L407.3 69.9C402.9 56.8 390.7 48 376.9 48L263.1 48C249.3 48 237.1 56.8 232.7 69.9zM512 208L128 208L149.1 531.1C150.7 556.4 171.7 576 197 576L443 576C468.3 576 489.3 556.4 490.9 531.1L512 208z" />
                                                </svg>

                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <div class="mt-4 ">
                        {{ $beritas->links('vendor.pagination.tailwind') }}
                    </div>

                    <div
                        class="mt-4 bg-yellow-50 border border-yellow-200 p-3 rounded-lg text-yellow-800 text-sm flex items-center gap-2">
                        <span>🔔</span>
                        <span>Artikel yang sedang direview redaksi</span>
                    </div>
                </section>

               `` <!-- Modal Tambah Artikel -->
                <div x-show="open" style="display: none;"
                    class="fixed inset-0 flex items-center justify-center bg-black/50 z-50 p-4" x-transition>
                    <div @click.away="open = false"
                        class="bg-white rounded-lg p-6 w-full max-w-4xl shadow-lg overflow-auto max-h-[90vh]">
                        <h2 class="text-xl font-semibold mb-4">Tambah Artikel</h2>
                        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Kiri -->
                                <div class="space-y-3">
                                    <div>
                                        <label class="block text-gray-700">Judul</label>
                                        <input type="text" name="judul" class="w-full border rounded p-2" required>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700">Slug</label>
                                        <input type="text" name="slug" class="w-full border rounded p-2">
                                        <small class="text-gray-500 text-sm">Opsional, biarkan kosong untuk
                                            auto-generate</small>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700">Isi Artikel</label>
                                        <textarea id="editor" name="isi" rows="6" class="w-full border rounded p-2"></textarea>
                                    </div>
                                </div>

                                <!-- Kanan -->
                                <div class="space-y-3">
                                    <div>
                                        <label class="block text-gray-700">Kategori</label>
                                        <select name="kategori_id" class="w-full border rounded p-2">
                                            <option value="">-- Pilih Kategori --</option>
                                            @foreach ($kategoris as $kategori)
                                                <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700">Penulis</label>
                                        <input type="text" name="penulis" class="w-full border rounded p-2">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700">Gambar</label>
                                        <input type="file" name="gambar" class="w-full border rounded p-2">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700">Tanggal</label>
                                        <input type="date" name="tanggal" class="w-full border rounded p-2">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700">Status</label>
                                        <select name="status" class="w-full border rounded p-2">
                                            <option value="draft">Draft</option>
                                            <option value="published">Published</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Tombol -->
                            <div class="flex justify-end gap-2 mt-4">
                                <button type="button" @click="open = false"
                                    class="px-4 py-2 bg-gray-300 rounded">Batal</button>
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- ✅ Tutup x-data -->
        </div>
    </div>

    <div id="editFormModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center p-4">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-3xl max-h-[90vh] overflow-auto">

            <h2 class="text-xl font-semibold mb-4">Edit Artikel</h2>

            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Kiri -->
                    <div class="space-y-3">
                        <div>
                            <label>Judul</label>
                            <input type="text" id="edit_judul" name="judul" class="w-full border rounded p-2">
                        </div>

                        <div>
                            <label>Slug</label>
                            <input type="text" id="edit_slug" name="slug" class="w-full border rounded p-2">
                        </div>

                        <div>
                            <label>Isi Artikel</label>
                            <textarea id="edit_isi" name="isi" rows="6" class="w-full border rounded p-2"></textarea>
                        </div>
                    </div>

                    <!-- Kanan -->
                    <div class="space-y-3">
                        <div>
                            <label>Kategori</label>
                            <select name="kategori_id" id="edit_kategori_id" class="w-full border rounded p-2">
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label>Penulis</label>
                            <input type="text" id="edit_penulis" name="penulis" class="w-full border rounded p-2">
                        </div>

                        <div>
                            <label>Gambar Baru (opsional)</label>
                            <input type="file" name="gambar" class="w-full border rounded p-2">
                        </div>

                        <div>
                            <label>Tanggal</label>
                            <input type="date" id="edit_tanggal" name="tanggal" class="w-full border rounded p-2">
                        </div>

                        <div>
                            <label>Status</label>
                            <select name="status" id="edit_status" class="w-full border rounded p-2">
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                            </select>
                        </div>

                    </div>
                </div>

                <!-- Tombol -->
                <div class="flex justify-end gap-2 mt-4">
                    <button type="button" onclick="closeEditForm()" class="px-4 py-2 bg-gray-300 rounded">Batal</button>

                    <button type="submit"
                        class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Update</button>
                </div>

            </form>

        </div>
    </div>

    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            })
        </script>
    @endif

    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        });

        function openEditForm(id, judul, slug, isi) {
            document.getElementById('editFormModal').classList.remove('hidden');
            document.getElementById('editFormModal').classList.add('flex');

            // Set action form
            document.getElementById('editForm').action = "/berita/" + id;

            // Isi field
            document.getElementById('edit_judul').value = judul;
            document.getElementById('edit_slug').value = slug;
            document.getElementById('edit_isi').value = isi;

            // Field lain bisa ditambahkan jika perlu
        }

        function closeEditForm() {
            document.getElementById('editFormModal').classList.add('hidden');
            document.getElementById('editFormModal').classList.remove('flex');
        }
    </script>
@endsection
