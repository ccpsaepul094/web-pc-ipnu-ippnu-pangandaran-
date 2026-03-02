@extends('admin.admin', ['title' => 'kelola user'])

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden"></div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-100">
                    <th class="px-6 py-4 text-xs font-semibold text-gray-600 uppercase">Nama Lengkap</th>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-600 uppercase">Email/Username</th>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-600 uppercase">Jabatan/Role</th>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-600 uppercase text-center">Aksi
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($allUser as $User)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-700 font-bold mr-3">
                                    AF</div>
                                <span class="font-medium text-gray-800">{{ $User->name }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">{{ $User->email }}</td>
                        <td class="px-6 py-4">
                            @if ($User->roles->isNotEmpty())
                                @foreach ($User->getRoleNames() as $role)
                                    @php
                                        // Logika warna berdasarkan nama role
                                        $color =
                                            $role == 'admin'
                                                ? 'bg-red-100 text-red-700'
                                                : 'bg-green-100 text-green-700';
                                    @endphp
                                    <span
                                        class="{{ $color }} px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                                        {{ $role }}
                                    </span>
                                @endforeach
                            @else
                                <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-full text-xs font-medium">
                                    Anggota Biasa
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center items-center space-x-3">

                                <form action="{{ route('users.destroy', $User->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700" title="Hapus">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>


                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4 px-6 py-4 bg-gray-50 border-t border-gray-100">
            {{ $allUser->links() }}
        </div>
    </div>
    </div>
@endsection
