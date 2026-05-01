<x-app-layout>
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-4xl mx-auto px-6">

            <div class="mb-6">
                <h1 class="text-3xl font-bold text-white">Edit Product</h1>
                <p class="text-gray-400">Ubah data product</p>
            </div>

            <form action="{{ route('product.update', $product->id) }}" method="POST"
                  class="bg-gray-800 p-6 rounded-xl shadow text-white">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block mb-1">Nama Product</label>
                    <input type="text" name="nama_product" value="{{ $product->nama_product }}"
                        class="w-full border border-gray-600 bg-gray-800 text-white p-2 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Harga</label>
                    <input type="number" name="harga" value="{{ $product->harga }}"
                        class="w-full border border-gray-600 bg-gray-800 text-white p-2 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Stok</label>
                    <input type="number" name="stok" value="{{ $product->stok }}"
                        class="w-full border border-gray-600 bg-gray-800 text-white p-2 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>

                <div class="mb-6">
                    <label class="block mb-1">Kategori</label>
                    <select name="kategori_id"
                        class="w-full border border-gray-600 bg-gray-800 text-white p-2 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}"
                                {{ $product->kategori_id == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="flex gap-3">
                    <button type="submit"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg font-semibold">
                        Update
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