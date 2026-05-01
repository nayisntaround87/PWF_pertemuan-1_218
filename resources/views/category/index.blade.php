<x-app-layout>
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-5xl mx-auto px-6">

            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-3xl font-bold text-white">Category List</h1>
                    <p class="text-gray-400">Daftar kategori product</p>
                </div>

                <a href="{{ route('category.create') }}"
                   class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-semibold">
                    + Add Category
                </a>
            </div>

            <div class="bg-gray-800 rounded-xl shadow overflow-hidden">
                <table class="w-full text-left text-sm text-gray-300">
                    <thead class="bg-gray-700 text-gray-200 uppercase">
                        <tr>
                            <th class="px-6 py-4">No</th>
                            <th class="px-6 py-4">Name</th>
                            <th class="px-6 py-4">Total Product</th>
                            <th class="px-6 py-4">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($kategoris as $item)
                            <tr class="border-b border-gray-700 hover:bg-gray-700">
                                <td class="px-6 py-4">{{ $loop->iteration }}</td>

                                <td class="px-6 py-4 font-semibold text-white">
                                    {{ $item->nama_kategori }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $item->products_count }}
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex gap-2">

                                        <!-- EDIT -->
                                        <a href="{{ route('category.edit', $item->id) }}"
                                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1.5 rounded text-sm">
                                            Edit
                                        </a>

                                        <!-- DELETE -->
                                        <form action="{{ route('category.destroy', $item->id) }}" method="POST"
                                              onsubmit="return confirm('Yakin mau hapus kategori ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded text-sm">
                                                Delete
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-6 text-center text-gray-400">
                                    Data kategori masih kosong.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>