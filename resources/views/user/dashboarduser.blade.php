@extends('user.user',['title' => 'user'])

@section('content')
    <div class="">
        <div class="p-4  rounded-lg">

            <div x-data="{ open: false }">

                <!-- Header -->
                <header class="w-full pb-6 flex justify-between items-center">
                    <h1 class="text-sm md:text-xl font-bold text-gray-800">
                        Dashboard Jurnalis
                    </h1>

                    <div class="flex items-center">
                        <div class="flex items-center ms-3 relative">
                            <div>
                                <button type="button"
                                    class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                    aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                        alt="user photo">
                                </button>
                            </div>
                            <div class="absolute right-0 top-full mt-2 z-50 hidden w-48 text-base list-none bg-white divide-y divide-gray-100 rounded-sm shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                                id="dropdown-user">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                                        {{ Auth::user()->name }}
                                    </p>
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                        {{ Auth::user()->email }}
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <!-- Link logout -->
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">
                                            Sign out
                                        </a>

                                        <!-- Form tersembunyi -->
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Statistik -->
                <div class="flex flex-col text-sm md:flex-row md:w-full md:gap-4">
                    <div class="flex flex-row justify-between gap-4 md:flex-1">
                        <div class="flex-1 bg-white p-5 rounded-xl shadow text-center">
                            <p class="text-gray-500">Total Artikel</p>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 mt-1">{{ $totalberita }}</h2>
                        </div>

                        <div class="flex-1 bg-white p-5 rounded-xl shadow text-center">
                            <p class="text-gray-500">Artikel Terbit</p>
                            <h2 class="text-2xl md:text-3xl font-bold text-green-600 mt-1">85</h2>
                        </div>
                    </div>

                    <div class="mt-2 flex flex-row justify-between gap-4 md:flex-1">
                        <div class="flex-1 bg-white p-5 rounded-xl shadow text-center">
                            <p class="text-gray-500">Menunggu Review</p>
                            <h2 class="text-2xl md:text-3xl font-bold text-yellow-600 mt-1">25</h2>
                        </div>

                        <div class="flex-1 bg-white p-5 rounded-xl shadow text-center">
                            <p class="text-gray-500">Total Pembaca</p>
                            <h2 class="text-2xl md:text-3xl font-bold text-blue-600 mt-1">34.520</h2>
                        </div>
                    </div>
                </div>

                <!-- Artikel Table -->
                <section class="bg-white mt-5 p-6 rounded-xl shadow">

                    <div class="flex items-center justify-between py-2 ">
                        <h2 class="text-sm md:text-lg font-semibold text-gray-800 mb-4">
                            Artikel Terbaru
                        </h2>

                        <div @click="open = true"
                            class="p-2 text-sm md:text-base bg-blue-500 rounded-lg text-white flex items-center gap-1 cursor-pointer hover:bg-blue-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5 md:size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span>Tambah Artikel</span>
                        </div>
                    </div>


                    <div class="overflow-x-auto">
                        <table class="w-full table-auto text-left text-gray-700 text-sm md:text-base">

                            <thead>
                                <tr class="border-b text-xs md:text-sm text-gray-500">
                                    <th>No</th>
                                    <th class="py-2 px-2">Judul</th>
                                    <th class="py-2 px-2">Status</th>
                                    <th class="py-2 px-2">Tanggal</th>
                                    <th class="py-2 px-2 text-right">Pembaca</th>
                                    <th class="px-5 text-center">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($beritas as $berita)
                                    <tr class="border-b hover:bg-gray-50 text-sm md:text-base">
                                        <td class="px-2 py-2">{{ $loop->iteration }}</td>

                                        <td class="px-2 py-2 break-words">
                                            {{ $berita->judul }}
                                        </td>

                                        <td class="px-2 py-2">
                                            <span
                                                class="text-xs md:text-sm px-2 py-1 rounded
                                            {{ $berita->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-700' }}">
                                                {{ $berita->status }}
                                            </span>
                                        </td>

                                        <td class="px-2 py-2">{{ $berita->tanggal }}</td>

                                        <td class="px-2 py-2 text-right">2.310</td>

                                        <td class="px-4 py-2 text-center flex items-center justify-center gap-3">

                                            @if ($berita->status == 'draft')
                                                <a onclick="openEditForm(this)" data-id="{{ $berita->id }}"
                                                    data-judul="{{ $berita->judul }}" data-slug="{{ $berita->slug }}"
                                                    data-isi="{{ $berita->isi }}"
                                                    data-kategori="{{ $berita->kategori_id }}"
                                                    data-penulis="{{ $berita->penulis }}"
                                                    data-tanggal="{{ $berita->tanggal }}"
                                                    data-status="{{ $berita->status }}"
                                                    class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded flex items-center justify-center w-9 h-9 md:w-10 md:h-10">
                                                    <svg class="w-4 h-4 md:w-5 md:h-5"></svg>
                                                </a>
                                            @endif

                                            <form action="{{ route('berita.destroy', $berita->id) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" onclick="return confirm('Yakin mau hapus?')"
                                                    class="bg-red-500 hover:bg-red-600 text-white p-2 rounded flex items-center justify-center w-9 h-9 md:w-10 md:h-10">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-4 h-4 md:w-5 md:h-5"></svg>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $beritas->links('vendor.pagination.tailwind') }}
                    </div>

                    <div
                        class="mt-4 bg-yellow-50 border border-yellow-200 p-3 rounded-lg text-yellow-800 text-xs md:text-sm flex items-center gap-2">
                        <span>🔔</span> Artikel yang sedang direview redaksi
                    </div>
                </section>

                <!-- Modal Tambah Artikel -->
                <div x-show="open" style="display:none;"
                    class="fixed inset-0 flex items-center justify-center bg-black/50 z-50 p-2 md:p-4" x-transition>

                    <div @click.away="open = false"
                        class="bg-white rounded-lg p-4 md:p-6 w-full max-w-4xl shadow-lg overflow-auto max-h-[90vh]">

                        <h2 class="text-lg md:text-xl font-semibold mb-4">Tambah Artikel</h2>

                        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 text-sm md:text-base">

                                <!-- Kiri -->
                                <div class="space-y-4">
                                    <div>
                                        <label class="block my-2 text-gray-700 font-semibold">Judul</label>
                                        <input type="text" name="judul" class="w-full border rounded p-2" required>
                                    </div>

                                    <div>
                                        <label class="block my-2 text-gray-700 font-semibold">Slug</label>
                                        <input type="text" name="slug" class="w-full border rounded p-2">
                                        <small class="text-gray-500 text-xs">
                                            Biarkan kosong untuk auto-generate
                                        </small>
                                    </div>

                                    <div>
                                        <label class="block my-2 text-gray-700 font-semibold">Isi Artikel</label>
                                        <textarea id="editor" name="isi" rows="4" class="w-full border rounded p-2"></textarea>
                                    </div>
                                </div>

                                <!-- Kanan -->
                                <div class="space-y-4">

                                    <div>
                                        <label class="block my-2 text-gray-700 font-semibold">Kategori</label>
                                        <select name="kategori_id" class="w-full border rounded p-2">
                                            <option value="">-- Pilih Kategori --</option>
                                            @foreach ($kategoris as $kategori)
                                                <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block my-2 text-gray-700 font-semibold">Penulis</label>
                                        <input type="text" name="penulis" class="w-full border rounded p-2">
                                    </div>

                                    <div>
                                        <label class="block my-2 text-gray-700 font-semibold">Gambar</label>
                                        <input type="file" name="gambar" class="w-full border rounded p-2">
                                    </div>

                                    <div>
                                        <label class="block my-2 text-gray-700 font-semibold">Tanggal</label>
                                        <input type="date" name="tanggal" class="w-full border rounded p-2">
                                    </div>

                                    <div>
                                        <label class="block my-2 text-gray-700 font-semibold">Status</label>
                                        <select name="status" class="w-full border rounded p-2">
                                            <option value="draft">Draft</option>
                                            <option value="published">Published</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <!-- Tombol -->
                            <div class="flex justify-end gap-2 mt-5">
                                <button type="button" @click="open = false"
                                    class="px-4 py-2 text-sm md:text-base bg-gray-300 rounded">
                                    Batal
                                </button>

                                <button type="submit"
                                    class="px-4 py-2 text-sm md:text-base bg-green-500 text-white rounded hover:bg-green-600">
                                    Simpan
                                </button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>


    <div id="editFormModal" class="fixed inset-0 bg-black/50 flex items-center justify-center p-4 hidden">

        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-3xl max-h-[90vh] overflow-auto mx-auto">

            <h2 class="text-xl font-semibold mb-4">Edit Artikel</h2>

            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" id="edit_id" name="id">

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

                <div class="flex justify-end gap-2 mt-4">
                    <button type="button" onclick="closeEditForm()" class="px-4 py-2 bg-gray-300 rounded">Batal</button>

                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                        Update
                    </button>
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

        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor
                .create(document.querySelector('#edit_isi'))
                .catch(error => {
                    console.error(error);
                });
        });

        function openEditForm(el) {
            document.getElementById("edit_id").value = el.dataset.id;
            document.getElementById("edit_judul").value = el.dataset.judul;
            document.getElementById("edit_slug").value = el.dataset.slug;
            document.getElementById("edit_isi").value = el.dataset.isi;
            document.getElementById("edit_kategori_id").value = el.dataset.kategori;
            document.getElementById("edit_penulis").value = el.dataset.penulis;
            document.getElementById("edit_tanggal").value = el.dataset.tanggal;
            document.getElementById("edit_status").value = el.dataset.status;

            document.getElementById("editForm").action = "/berita/update/" + el.dataset.id;


            document.getElementById("editFormModal").classList.remove("hidden");
        }


        function closeEditForm() {
            document.getElementById("editFormModal").classList.add("hidden");
        }
    </script>
@endsection
