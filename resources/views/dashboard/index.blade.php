@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold">Dashboard Bengkel</h2>
        <p class="text-slate-500">Ringkasan data bengkel hari ini</p>
    </div>

    {{-- Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm p-5">
            <p class="text-sm text-slate-500">Total Pelanggan</p>
            <h3 class="text-3xl font-bold mt-2">120</h3>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-5">
            <p class="text-sm text-slate-500">Total Kendaraan</p>
            <h3 class="text-3xl font-bold mt-2">87</h3>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-5">
            <p class="text-sm text-slate-500">Servis Hari Ini</p>
            <h3 class="text-3xl font-bold mt-2">14</h3>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-5">
            <p class="text-sm text-slate-500">Sparepart Menipis</p>
            <h3 class="text-3xl font-bold mt-2">6</h3>
        </div>
    </div>

    {{-- Tabel servis terbaru --}}
    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="p-5 border-b border-slate-200">
            <h3 class="text-lg font-semibold">Servis Terbaru</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-slate-50 text-slate-600">
                    <tr>
                        <th class="text-left px-6 py-3">Kode</th>
                        <th class="text-left px-6 py-3">Pelanggan</th>
                        <th class="text-left px-6 py-3">Kendaraan</th>
                        <th class="text-left px-6 py-3">Tanggal</th>
                        <th class="text-left px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-slate-100">
                        <td class="px-6 py-4">SRV-001</td>
                        <td class="px-6 py-4">Budi</td>
                        <td class="px-6 py-4">Honda Beat</td>
                        <td class="px-6 py-4">21 Juni 2026</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">
                                Menunggu
                            </span>
                        </td>
                    </tr>

                    <tr class="border-t border-slate-100">
                        <td class="px-6 py-4">SRV-002</td>
                        <td class="px-6 py-4">Andi</td>
                        <td class="px-6 py-4">Yamaha NMAX</td>
                        <td class="px-6 py-4">21 Juni 2026</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">
                                Dikerjakan
                            </span>
                        </td>
                    </tr>

                    <tr class="border-t border-slate-100">
                        <td class="px-6 py-4">SRV-003</td>
                        <td class="px-6 py-4">Rina</td>
                        <td class="px-6 py-4">Honda Vario</td>
                        <td class="px-6 py-4">20 Juni 2026</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                Selesai
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection