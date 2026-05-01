<x-app-layout>
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-4xl mx-auto px-6">

            <div class="mb-6">
                <h1 class="text-3xl font-bold text-white">Tambah Product</h1>
                <p class="text-gray-400">Masukkan data product baru</p>
            </div>

            <form action="{{ route('product.store') }}" method="POST"
                  class="bg-gray-800 p-6 rounded-xl shadow text-white">
                @csrf

                <!-- Nama -->
                <div class="mb-4">
                    <label class="block mb-1">Nama Product</label>
                    <input type="text" name="nama_product"
                        class="w-full border border-gray-600 bg-gray-800 text-white p-2 rounded
                               focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nama product">
                </div>

                <!-- Harga -->
                <div class="mb-4">
                    <label class="block mb-1">Harga</label>
                    <input type="number" name="harga"
                        class="w-full border border-gray-600 bg-gray-800 text-white p-2 rounded
                               focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan harga">
                </div>

                <!-- Stok -->
                <div class="mb-4">
                    <label class="block mb-1">Stok</label>
                    <input type="number" name="stok"
                        class="w-full border border-gray-600 bg-gray-800 text-white p-2 rounded
                               focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan stok">
                </div>

                <!-- Kategori -->
                <div class="mb-6">
                    <label class="block mb-1">Kategori</label>
                    <select name="kategori_id"
                        class="w-full border border-gray-600 bg-gray-800 text-white p-2 rounded
                               focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Tombol -->
                <div class="flex gap-3">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-semibold">
                        Simpan
                    </button>

                    <a href="{{ route('product.index') }}"
                       class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>