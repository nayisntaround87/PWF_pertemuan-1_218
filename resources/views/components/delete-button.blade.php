<form action="{{ $url }}" method="POST" class="inline-flex">
    @csrf
    @method('DELETE')

    <button type="submit"
        class="bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1.5 rounded"
        onclick="return confirm('Yakin mau hapus data ini?')">
        Delete
    </button>
</form>