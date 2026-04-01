@extends('layouts.main')

@section('content')
<div class="max-w-2xl mx-auto mt-24 mb-24 bg-white p-8 rounded-3xl shadow-xl border border-slate-100">
    <h1 class="text-3xl font-black text-slate-900 mb-8">Přidat fotku do galerie</h1>

    @if(session('success'))
        <div class="bg-green-50 text-green-700 p-4 rounded-xl mb-6 font-bold flex items-center gap-2">
            <i class="ri-checkbox-circle-fill text-xl"></i> {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Nadpis (co je na fotce)</label>
            <input type="text" name="title" required class="w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50 focus:ring-blue-500 focus:border-blue-500" placeholder="např. Montáž Jablotron Ostrava">
        </div>

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Kategorie</label>
            <select name="category" class="w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50 focus:ring-blue-500 focus:border-blue-500">
                <option value="">Bez kategorie</option>
                <option value="Antény a satelity">Antény a satelity</option>
                <option value="Zabezpečení a Kamery">Zabezpečení a Kamery</option>
                <option value="Servis">Servis a opravy</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Detailnější popis (volitelné)</label>
            <textarea name="description" rows="3" class="w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50 focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Vybrat fotku</label>
            <input type="file" name="image" required accept="image/*" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        </div>

        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold text-lg py-4 rounded-xl shadow-lg transition-all hover:-translate-y-1 mt-4">
            Zkomprimovat a Nahrát na web
        </button>
    </form>
</div>
@endsection