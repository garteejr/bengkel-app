@extends('layouts.app')

@section('title', 'Pelanggan')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-2xl font-bold">Data Pelanggan</h1>
        <p class="text-gray-500 text-sm">Kelola data pelanggan bengkel</p>
    </div>

    <!-- tombol tambah -->
    <button onclick="document.getElementById('modal').classList.remove('hidden')"
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        + Tambah Pelanggan
    </button>

</div>

<div class="flex justify-between items-center mb-4">

    <input type="text"
        placeholder="Cari pelanggan..."
        class="border p-2 rounded w-64">

    <button class="bg-gray-100 px-3 py-2 rounded hover:bg-gray-200">
        Search
    </button>

</div>

<!-- TABLE -->
<div class="bg-white rounded shadow overflow-hidden">

    <table class="w-full text-sm">

        <thead class="bg-gray-100">
            <tr>
                <th class="text-left p-3">Nama</th>
                <th class="text-left p-3">No HP</th>
                <th class="text-left p-3">Alamat</th>
                <th class="text-left p-3">Aksi</th>
            </tr>
        </thead>

        <tbody>

            <tr class="border-t">
                <td class="p-3">Budi Santoso</td>
                <td class="p-3">08123456789</td>
                <td class="p-3">Weleri</td>
                <td class="p-3 flex gap-2">

                    <button class="text-blue-600">Edit</button>
                    <button class="text-red-600">Hapus</button>

                </td>
            </tr>

        </tbody>

    </table>

</div>

<!-- MODAL -->
<div id="modal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center">

    <div class="bg-white w-[400px] p-6 rounded">

        <div class="flex justify-between mb-4">
            <h2 class="text-lg font-bold">Tambah Pelanggan</h2>

            <button onclick="document.getElementById('modal').classList.add('hidden')">
                ✕
            </button>
        </div>

        <form class="space-y-3">

            <input type="text" placeholder="Nama"
                class="w-full border p-2 rounded">

            <input type="text" placeholder="No HP"
                class="w-full border p-2 rounded">

            <textarea placeholder="Alamat"
                class="w-full border p-2 rounded"></textarea>

            <button class="bg-blue-600 text-white w-full py-2 rounded">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection