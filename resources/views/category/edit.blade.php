<x-app-layout>
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-4xl mx-auto px-6">

            <div class="mb-6">
                <h1 class="text-3xl font-bold text-white">Edit Category</h1>
                <p class="text-gray-400">Ubah nama kategori</p>
            </div>

            <form action="{{ route('category.update', $kategori->id) }}" method="POST"
                  class="bg-gray-800 p-6 rounded-xl shadow text-white">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label class="block mb-1">Nama Category</label>
                    <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}"
                        class="w-full border border-gray-600 bg-gray-800 text-white p-2 rounded
                               focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>

                <div class="flex gap-3">
                    <button type="submit"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg font-semibold">
                        Update
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