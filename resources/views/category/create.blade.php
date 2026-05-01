<x-app-layout>
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-4xl mx-auto px-6">

            <div class="mb-6">
                <h1 class="text-3xl font-bold text-white">Tambah Category</h1>
                <p class="text-gray-400">Masukkan nama kategori baru</p>
            </div>

            <form action="{{ route('category.store') }}" method="POST"
                  class="bg-gray-800 p-6 rounded-xl shadow text-white">
                @csrf

                <div class="mb-6">
                    <label class="block mb-1">Nama Category</label>
                    <input type="text" name="nama_kategori"
                        class="w-full border border-gray-600 bg-gray-800 text-white p-2 rounded
                               focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Contoh: Elektronik">
                </div>

                <div class="flex gap-3">
                    <button type="submit"
                        class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-semibold">
                        Simpan
                    </button>

                    <a href="{{ route('category.index') }}"
                       class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>