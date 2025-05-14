<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pelanggan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-800">

    <div class="max-w-xl mx-auto mt-10 p-8 bg-white rounded-2xl shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-blue-700 text-center">✏️ Edit Data Pelanggan</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/pelanggan/' . $pelanggan->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="nama" class="block font-semibold">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $pelanggan->nama) }}"
                       class="w-full mt-1 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="no_hp" class="block font-semibold">No HP</label>
                <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp', $pelanggan->no_hp) }}"
                       class="w-full mt-1 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="alamat" class="block font-semibold">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3"
                          class="w-full mt-1 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('alamat', $pelanggan->alamat) }}</textarea>
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ url('/pelanggan') }}"
                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded shadow transition">
                   Batal
                </a>
                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded shadow transition">
                    Perbarui
                </button>
            </div>
        </form>
    </div>

</body>
</html>
