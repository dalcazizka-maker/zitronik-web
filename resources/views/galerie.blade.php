@extends('layouts.main')
@section('title', 'Galerie realizací | Zitronik')

@section('content')
<div class="py-16 lg:py-24 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-4">Moje <span class="text-blue-700">realizace</span></h1>
            <p class="text-lg text-slate-600">Prohlédněte si ukázky mých montáží. Od antén na střechách přes úhledně sdrátované racky až po čistou instalaci kamer na fasádách.</p>
        </div>

        <div class="flex flex-wrap justify-center gap-2 mb-12">
            <button class="px-6 py-2 rounded-full bg-blue-700 text-white font-bold text-sm shadow-md transition-all">Vše</button>
            <button class="px-6 py-2 rounded-full bg-white text-slate-600 hover:bg-blue-50 hover:text-blue-700 font-bold text-sm shadow-sm border border-slate-200 transition-all">Antény a TV</button>
            <button class="px-6 py-2 rounded-full bg-white text-slate-600 hover:bg-blue-50 hover:text-blue-700 font-bold text-sm shadow-sm border border-slate-200 transition-all">Kamery (CCTV)</button>
            <button class="px-6 py-2 rounded-full bg-white text-slate-600 hover:bg-blue-50 hover:text-blue-700 font-bold text-sm shadow-sm border border-slate-200 transition-all">Alarmy Jablotron</button>
            <button class="px-6 py-2 rounded-full bg-white text-slate-600 hover:bg-blue-50 hover:text-blue-700 font-bold text-sm shadow-sm border border-slate-200 transition-all">Servis</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="group relative rounded-2xl overflow-hidden bg-slate-200 aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="absolute inset-0 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-500">
                    <i class="ri-shield-check-line text-6xl"></i>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-blue-400 font-bold text-sm mb-1">Kamery</span>
                    <h3 class="text-white font-bold text-lg leading-tight">Montáž kamer Hikvision na rodinný dům</h3>
                </div>
            </div>

            <div class="group relative rounded-2xl overflow-hidden bg-slate-200 aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="absolute inset-0 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-500">
                    <i class="ri-broadcast-line text-6xl"></i>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-blue-400 font-bold text-sm mb-1">Antény</span>
                    <h3 class="text-white font-bold text-lg leading-tight">Výměna zesilovače a měření DVB-T2</h3>
                </div>
            </div>

            <div class="group relative rounded-2xl overflow-hidden bg-slate-200 aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="absolute inset-0 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-500">
                    <i class="ri-alarm-warning-line text-6xl"></i>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-blue-400 font-bold text-sm mb-1">Zabezpečení</span>
                    <h3 class="text-white font-bold text-lg leading-tight">Srdce alarmu Jablotron 100+</h3>
                </div>
            </div>
            
            <div class="group relative rounded-2xl overflow-hidden bg-slate-200 aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="absolute inset-0 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-500">
                    <i class="ri-tools-line text-6xl"></i>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-blue-400 font-bold text-sm mb-1">Servis</span>
                    <h3 class="text-white font-bold text-lg leading-tight">Úhledně vyvázaný rozvaděč (Rack)</h3>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection