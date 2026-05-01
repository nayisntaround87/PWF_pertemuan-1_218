<x-app-layout>
    <div class="py-12 bg-gray-900 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 rounded-lg shadow-lg p-8 text-white">

                <div class="flex justify-between items-center mb-8">
                    <div>
                        <a href="{{ route('product.index') }}" class="text-gray-400 text-2xl">&larr;</a>
                        <h1 class="text-3xl font-bold mt-2">Product Detail</h1>
                        <p class="text-gray-400">Viewing product #{{ $product->id }}</p>
                    </div>

                    <div class="flex gap-3">
                        <x-edit-button :url="route('product.edit', $product->id)" />
                        <x-delete-button :url="route('product.destroy', $product->id)" />
                    </div>
                </div>

                <div class="border border-gray-600 rounded-lg overflow-hidden">

                    <div class="grid grid-cols-3 border-b border-gray-600 p-4">
                        <div class="text-gray-400">Product Name</div>
                        <div class="col-span-2 font-bold">{{ $product->nama_product }}</div>
                    </div>

                    <div class="grid grid-cols-3 border-b border-gray-600 p-4">
                        <div class="text-gray-400">Quantity</div>
                        <div class="col-span-2">
                            <span class="bg-green-700 text-green-100 px-3 py-1 rounded-full text-sm font-bold">
                                {{ $product->stok }} In Stock
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 border-b border-gray-600 p-4">
                        <div class="text-gray-400">Price</div>
                        <div class="col-span-2 font-bold">
                            Rp {{ number_format($product->harga, 0, ',', '.') }}
                        </div>
                    </div>

                    <div class="grid grid-cols-3 border-b border-gray-600 p-4">
                        <div class="text-gray-400">Kategori</div>
                        <div class="col-span-2 font-bold">
                            {{ $product->kategori->nama_kategori ?? '-' }}
                        </div>
                    </div>

                    <div class="grid grid-cols-3 border-b border-gray-600 p-4">
                        <div class="text-gray-400">Created At</div>
                        <div class="col-span-2">
                            {{ $product->created_at->format('d M Y, H:i') }}
                        </div>
                    </div>

                    <div class="grid grid-cols-3 p-4">
                        <div class="text-gray-400">Updated At</div>
                        <div class="col-span-2">
                            {{ $product->updated_at->format('d M Y, H:i') }}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>