@extends('layouts.main')
@section('title', 'Úprava protokolu | Administrace')

@section('content')
<div class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-8 flex items-center gap-4">
            <a href="{{ route('protocols.index') }}" class="text-slate-500 hover:text-blue-600"><i class="ri-arrow-left-line text-2xl"></i></a>
            <div>
                <h1 class="text-3xl font-black text-slate-900">Úprava protokolu</h1>
                <p class="text-slate-500 font-bold">Číslo: {{ $protocol->protocol_number }}</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-8">
            <form action="{{ route('protocols.update', $protocol) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT') <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Jméno zákazníka *</label>
                        <input type="text" name="customer_name" value="{{ $protocol->customer_name }}" required class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 bg-slate-50 py-2 px-3">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Telefon (volitelně)</label>
                        <input type="text" name="customer_phone" value="{{ $protocol->customer_phone }}" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 bg-slate-50 py-2 px-3">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Zařízení *</label>
                    <input type="text" name="device" value="{{ $protocol->device }}" required class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 bg-slate-50 py-2 px-3">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Popis závady a provedené práce *</label>
                    <textarea name="description" rows="4" required class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 bg-slate-50 py-2 px-3">{{ $protocol->description }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Cena v Kč (volitelně)</label>
                    <input type="number" name="price" value="{{ $protocol->price }}" class="w-32 rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 bg-slate-50 py-2 px-3">
                </div>

                <div class="pt-4 border-t border-slate-100 flex justify-between items-center">
                    <a href="{{ route('protocols.index') }}" class="text-slate-500 font-bold hover:text-slate-800 transition">Zrušit</a>
                    <button type="submit" class="px-8 py-3 bg-blue-600 text-white font-bold rounded-lg shadow-md hover:bg-blue-700 transition">
                        Uložit změny
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection