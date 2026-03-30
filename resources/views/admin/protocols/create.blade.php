@extends('layouts.main')
@section('title', 'Nový protokol | Administrace')

@section('content')
<div class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-8 flex items-center gap-4">
            <a href="{{ route('protocols.index') }}" class="text-slate-500 hover:text-blue-600"><i class="ri-arrow-left-line text-2xl"></i></a>
            <h1 class="text-3xl font-black text-slate-900">Vypsat nový protokol</h1>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-8">
            <form action="{{ route('protocols.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Jméno zákazníka *</label>
                        <input type="text" name="customer_name" required class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 bg-slate-50 py-2 px-3">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Telefon (volitelně)</label>
                        <input type="text" name="customer_phone" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 bg-slate-50 py-2 px-3">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Zařízení (např. TV Samsung QLED) *</label>
                    <input type="text" name="device" required class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 bg-slate-50 py-2 px-3">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Popis závady a provedené práce *</label>
                    <textarea name="description" rows="4" required class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 bg-slate-50 py-2 px-3"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Cena v Kč (volitelně)</label>
                    <input type="number" name="price" class="w-32 rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 bg-slate-50 py-2 px-3">
                </div>

                <div class="pt-4 border-t border-slate-100 text-right">
                    <button type="submit" class="px-8 py-3 bg-blue-600 text-white font-bold rounded-lg shadow-md hover:bg-blue-700 transition">
                        Uložit a vygenerovat
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection