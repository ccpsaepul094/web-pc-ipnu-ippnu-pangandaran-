@extends('user.user')

@section('content')
    <div class=" sm:ml-64">
        <div class="p-4 rounded-lg mt-14">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded-sm bg-green-500">
                    <p class="text-3xl text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-9">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </p>
                    <div class="text-white px-2">
                        <p>Semua Artikel</p>
                        <p>{{ $totalberita }}</p>
                    </div>
                </div>

                <div class="flex items-center justify-center h-24 rounded-sm bg-green-500">
                    <p class="text-3xl text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-9">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </p>
                    <div class="text-white px-2">
                        <p>Belum Disetujui</p>
                        <p>50</p>
                    </div>
                </div>
            </div>

            <!-- Pastikan di layout utama sudah ada -->
            <!-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script> -->

            <div x-data="{ open: false }"> <!-- ✅ Bungkus semua konten di dalam x-data -->

                <!-- Header + Tombol Tambah -->
                <div class="flex items-center justify-between py-3">
                    <h3 class="text-lg font-semibold">Data Artikel</h3>
                    <div @click="open = true"
                        class="p-2 bg-green-500 rounded-lg text-white flex items-center gap-1 cursor-pointer hover:bg-green-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Tambah Artikel</span>
                    </div>
                </div>

                <!-- Tabel Data -->
                <div class="rounded-lg overflow-hidden border border-gray-300 shadow-md">
                    <table class="table-auto w-full text-sm">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Judul</th>
                                <th class="border px-4 py-2">Slug</th>
                                <th class="border px-4 py-2">Penulis</th>
                                <th class="border px-4 py-2">Tanggal</th>
                                <th class="border px-4 py-2">Status</th>
                                <th class="border px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beritas as $berita)
                                <tr>
                                    <td class="border px-4 py-2">{{ $berita->id }}</td>
                                    <td class="border px-4 py-2">{{ $berita->judul }}</td>
                                    <td class="border px-4 py-2">{{ $berita->slug }}</td>
                                    <td class="border px-4 py-2">{{ $berita->penulis }}</td>
                                    <td class="border px-4 py-2">{{ $berita->tanggal }}</td>
                                    <td class="border px-4 py-2">{{ $berita->status }}</td>
                                    <td class="px-4 py-2">
                                        <a href="#"
                                            class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">Edit</a>

                                        <form action="#" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Yakin mau hapus?')"
                                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Modal Tambah Artikel -->
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

    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>

    {{-- <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
            </div> --}}
    </div>
    </div>
@endsection
