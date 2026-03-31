@extends('layouts.main')
@section('title', 'Montáž a opravy antén, DVB-T2 a satelitů | Zitronik')

@section('content')
<div class="relative bg-slate-900 py-20 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-slate-900 to-slate-900"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center lg:text-left flex flex-col lg:flex-row items-center gap-12">
        <div class="lg:w-1/2">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/20 text-blue-300 text-sm font-bold mb-6 border border-blue-500/30">
                <i class="ri-broadcast-fill"></i> Televizní signál bez kompromisů
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-white mb-6 leading-tight">
                Křišťálově čistý obraz. <br><span class="text-blue-400">Už žádné kostičkování.</span>
            </h1>
            <p class="text-lg text-slate-300 mb-8 max-w-2xl">
                Zlobí vás příjem televize? Vypadává signál při špatném počasí? Změřím signál profi měřákem, vyměním starou anténu nebo nastavím satelit pro Skylink a freeSAT.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="tel:+420734130467" class="px-8 py-4 rounded-xl text-white bg-blue-600 hover:bg-blue-500 font-bold text-lg shadow-lg shadow-blue-600/30 transition-all hover:-translate-y-1 flex items-center justify-center gap-2">
                    <i class="ri-phone-fill"></i> Volat technika
                </a>
                <a href="#cenik" class="px-8 py-4 rounded-xl text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 font-bold text-lg transition-all flex items-center justify-center gap-2">
                    Jak to probíhá?
                </a>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full max-w-md">
            <div class="bg-slate-800 p-2 rounded-3xl border border-slate-700 shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
                <div class="bg-slate-900 rounded-2xl p-8 aspect-video flex flex-col items-center justify-center text-center">
                    <i class="ri-tv-2-line text-7xl text-blue-500 mb-4 animate-pulse"></i>
                    <p class="text-white font-bold text-xl">100% Kvalita DVB-T2</p>
                    <p class="text-slate-400 text-sm mt-2">Měření signálu profi technikou</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <div class="lg:col-span-2 space-y-10 text-lg text-slate-600">
                <div>
                    <h2 class="text-3xl font-black text-slate-900 mb-6">S čím vám pomohu?</h2>
                    <p class="mb-4">Není nic horšího, než když se těšíte na večerní film nebo sportovní přenos a obraz začne vypadávat. Často za to může starý kabel, zkorodovaný zesilovač na půdě, nebo špatně nasměrovaná anténa po silném větru.</p>
                    <p>Díky profesionálnímu měřícímu přístroji <strong>nehádám, ale měřím</strong>. Přesně zjistím, kde je problém, a navrhnu nejlevnější a nejúčinnější řešení.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <i class="ri-radar-line text-3xl text-blue-600 mb-4 block"></i>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Pozemní vysílání (DVB-T2)</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Montáž nových antén</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Výměna zesilovačů a rozbočovačů</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Instalace LTE / 5G filtrů proti rušení</li>
                        </ul>
                    </div>
                    
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <i class="ri-earth-line text-3xl text-blue-600 mb-4 block"></i>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Satelitní technika</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Přesné ladění parabol</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Montáž satelitů (Skylink, freeSAT)</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Výměna konvertorů (LNB)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-blue-600 rounded-3xl p-8 text-white shadow-xl shadow-blue-600/20 sticky top-8">
                    <h3 class="text-2xl font-bold mb-6">Proč si vybrat mě?</h3>
                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-tools-fill text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Profi vybavení</h4>
                                <p class="text-blue-100 text-sm mt-1">Používám špičkové měřící přístroje. Nezkouším to metodou "pokus-omyl".</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-map-pin-2-fill text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Lokální servis</h4>
                                <p class="text-blue-100 text-sm mt-1">Jsem z Klimkovic, po Ostravě a okolí jsem u vás cobydup.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-money-dollar-circle-line text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Férové ceny</h4>
                                <p class="text-blue-100 text-sm mt-1">Cenu opravy nebo montáže s vámi vždy proberu předem.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="bg-slate-50 border-t border-slate-200 py-16">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-black text-slate-900 mb-4">Potřebujete opravit signál?</h2>
        <p class="text-slate-600 mb-8 text-lg">Zavolejte mi a domluvíme se na termínu. Často zvládnu dorazit i do druhého dne.</p>
        <a href="{{ route('kontakt') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl text-white bg-slate-900 hover:bg-slate-800 font-bold text-lg shadow-lg transition-all hover:-translate-y-1">
            Přejít na kontakty <i class="ri-arrow-right-line"></i>
        </a>
    </div>
</div>
@endsection