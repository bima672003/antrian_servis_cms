<!-- resources/views/pelanggan/index.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pelanggan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <div class="max-w-6xl mx-auto mt-10 p-6 bg-white rounded-2xl shadow-xl">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-700">📋 Daftar Pelanggan</h1>

        @if(session('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-6 shadow">
                {{ session('message') }}
            </div>
        @endif

        <div class="flex justify-end mb-4">
            <a href="{{ url('/pelanggan/create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md shadow-md transition-all duration-300">
               + Tambah Pelanggan
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full table-fixed border-collapse border border-gray-300 rounded-lg shadow">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="border border-gray-300 px-4 py-3 w-1/4">Nama</th>
                        <th class="border border-gray-300 px-4 py-3 w-1/4">No HP</th>
                        <th class="border border-gray-300 px-4 py-3 w-1/3">Alamat</th>
                        <th class="border border-gray-300 px-4 py-3 w-1/6">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pelanggan as $p)
                        <tr class="hover:bg-blue-50 transition duration-200">
                            <td class="border border-gray-300 px-4 py-2">{{ $p->nama }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $p->no_hp }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $p->alamat }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <div class="flex gap-2">
                                    <a href="{{ url('/pelanggan/'.$p->id.'/edit') }}"
                                       class="bg-yellow-400 hover:bg-yellow-500 text-white text-sm px-3 py-1 rounded shadow transition">
                                       Edit
                                    </a>
                                    <form action="{{ url('/pelanggan/'.$p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded shadow transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-gray-500 py-6">Belum ada data pelanggan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
