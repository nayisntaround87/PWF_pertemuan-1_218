<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Biodata
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-2xl p-8">

                <form>
                    <div class="mb-4">
                        <label>Nama</label>
                        <input type="text" value="Nayla Salwa" class="border rounded w-full p-2">
                    </div>

                    <div class="mb-4">
                        <label>NIM</label>
                        <input type="text" value="20230140218" class="border rounded w-full p-2">
                    </div>

                    <div class="mb-4">
                        <label>Prodi</label>
                        <input type="text" value="Teknologi Informasi" class="border rounded w-full p-2">
                    </div>

                    <div class="mb-4">
                        <label>Hobi</label>
                        <input type="text" value="Mantai" class="border rounded w-full p-2">
                    </div>

                    <button class="bg-blue-500 text-white px-4 py-2 rounded">
                        Simpan
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>