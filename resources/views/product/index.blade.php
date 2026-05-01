<x-app-layout>
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-6xl mx-auto px-6">

            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-3xl font-bold text-white">Data Product</h1>
                    <p class="text-gray-400">Daftar product yang tersedia</p>
                </div>

                <a href="{{ route('product.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-semibold">
                    + Tambah Product
                </a>
            </div>

            <div class="bg-gray-800 rounded-xl shadow overflow-hidden">
                <table class="w-full text-left text-sm text-gray-300">
                    <thead class="bg-gray-700 text-gray-200 uppercase">
                        <tr>
                            <th class="px-6 py-4">No</th>
                            <th class="px-6 py-4">Nama</th>
                            <th class="px-6 py-4">Harga</th>
                            <th class="px-6 py-4">Stok</th>
                            <th class="px-6 py-4">Kategori</th>
                            <th class="px-6 py-4">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($products as $item)
                            <tr class="border-b border-gray-700 hover:bg-gray-700">
                                <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 font-semibold text-white">
                                    {{ $item->nama_product }}
                                </td>
                                <td class="px-6 py-4">
                                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->stok }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->kategori->nama_kategori ?? '-' }}
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">

                                        <!-- DETAIL -->
                                        <a href="{{ route('product.show', $item->id) }}"
                                           class="bg-green-600 hover:bg-green-700 text-white px-3 py-1.5 rounded text-sm">
                                            Detail
                                        </a>

                                        <!-- EDIT -->
                                        <a href="{{ route('product.edit', $item->id) }}"
                                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1.5 rounded text-sm">
                                            Edit
                                        </a>

                                        <!-- DELETE -->
                                        <form action="{{ route('product.destroy', $item->id) }}" method="POST"
                                              onsubmit="return confirm('Yakin mau hapus data ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm">
                                                Delete
                                            </button>
                                        </form>

                                    </div>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-6 text-center text-gray-400">
                                    Data product masih kosong.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>