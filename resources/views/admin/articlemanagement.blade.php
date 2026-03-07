@extends('admin.admin', ['title' => 'kelola artikel'])

@section('content')
    <section class="bg-white mt-5 p-6 rounded-xl shadow">
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
                                        data-isi="{{ $berita->isi }}" data-kategori="{{ $berita->kategori_id }}"
                                        data-penulis="{{ $berita->penulis }}" data-tanggal="{{ $berita->tanggal }}"
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
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 md:w-5 md:h-5"></svg>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>


    {{-- <div class="mt-4 px-6 py-4 bg-gray-50 border-t border-gray-100">
            {{ $allUser->links() }}
        </div> --}}

    </div>
@endsection
