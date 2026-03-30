@extends('layouts.main')
@section('title', 'Moje protokoly | Administrace')

@section('content')
<div class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-black text-slate-900">Servisní protokoly</h1>
            <a href="{{ route('protocols.create') }}" class="px-6 py-2 bg-blue-600 text-white font-bold rounded-lg shadow-md hover:bg-blue-700 transition">
                + Nový protokol
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg font-bold">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-100 text-slate-600 text-sm uppercase tracking-wider">
                        <th class="p-4 font-bold">Číslo</th>
                        <th class="p-4 font-bold">Zákazník</th>
                        <th class="p-4 font-bold">Zařízení</th>
                        <th class="p-4 font-bold">Cena</th>
                        <th class="p-4 font-bold text-right">Akce</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($protocols as $protocol)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="p-4 font-bold text-slate-900">{{ $protocol->protocol_number }}</td>
                        <td class="p-4">
                            <div class="font-bold text-slate-800">{{ $protocol->customer_name }}</div>
                            <div class="text-xs text-slate-500">{{ $protocol->customer_phone }}</div>
                        </td>
                        <td class="p-4 text-slate-600">{{ $protocol->device }}</td>
                        <td class="p-4 font-bold text-blue-600">{{ $protocol->price ? $protocol->price . ' Kč' : '-' }}</td>
                        <td class="p-4 text-right flex justify-end gap-2">
                            <a href="{{ route('protocols.edit', $protocol) }}" class="inline-flex items-center gap-1 text-sm text-slate-600 hover:text-blue-600 font-bold bg-slate-100 hover:bg-blue-50 px-3 py-1 rounded-md transition">
                                <i class="ri-edit-line"></i> Upravit
                            </a>
                            
                            <a href="{{ route('protocols.pdf', $protocol) }}" class="inline-flex items-center gap-1 text-sm text-red-600 hover:text-red-800 font-bold bg-red-50 px-3 py-1 rounded-md transition border border-red-100">
                                <i class="ri-file-pdf-2-line"></i> PDF
                            </a>

                            <form action="{{ route('protocols.destroy', $protocol) }}" method="POST" class="inline-block" onsubmit="return confirm('Opravdu chcete tento protokol nenávratně smazat?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center gap-1 text-sm text-slate-400 hover:text-white font-bold bg-white hover:bg-red-600 px-3 py-1 rounded-md transition border border-slate-200 hover:border-red-600">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="p-8 text-center text-slate-500">Zatím nemáš žádné protokoly. Zkus vytvořit první!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection