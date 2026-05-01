<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Biodata Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-2xl p-8">

                <div class="space-y-4 text-lg">
                    <p><span class="font-semibold">Nama:</span> Nayla Salwa</p>
                    <p><span class="font-semibold">NIM:</span> 20230140218</p>
                    <p><span class="font-semibold">Program Studi:</span> Teknologi Informasi</p>
                    <p><span class="font-semibold">Hobi:</span> Mantai</p>
                </div>

                <div class="mt-6 flex items-center gap-2">
                    <x-edit-button :url="route('about.edit')" />
                    <x-delete-button url="/about/delete" />
                </div>

            </div>
        </div>
    </div>
</x-app-layout>