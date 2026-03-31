@extends('layouts.main')
@section('title', 'Servis a opravy elektroniky | Zitronik')

@section('content')
<div class="relative bg-slate-900 py-20 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-teal-500 via-slate-900 to-slate-900"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center lg:text-left flex flex-col lg:flex-row items-center gap-12">
        <div class="lg:w-1/2">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-teal-500/20 text-teal-300 text-sm font-bold mb-6 border border-teal-500/30">
                <i class="ri-tools-fill"></i> Záchrana vaší elektroniky
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-white mb-6 leading-tight">
                Vdechnu vaší elektronice <br><span class="text-teal-400">nový život.</span>
            </h1>
            <p class="text-lg text-slate-300 mb-8 max-w-2xl">
                Zčernala vám obrazovka u televize? Přestal fungovat set-top box nebo potřebujete vyměnit konektor? Nevyhazujte to. V mém servisu v Klimkovicích najdeme závadu.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="{{ route('kontakt') }}" class="px-8 py-4 rounded-xl text-white bg-teal-600 hover:bg-teal-500 font-bold text-lg shadow-lg shadow-teal-600/30 transition-all hover:-translate-y-1 flex items-center justify-center gap-2">
                    <i class="ri-map-pin-2-fill"></i> Kde mě najdete
                </a>
                <a href="tel:+420734130467" class="px-8 py-4 rounded-xl text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 font-bold text-lg transition-all flex items-center justify-center gap-2">
                    Konzultovat závadu
                </a>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full max-w-md">
            <div class="bg-slate-800 p-2 rounded-3xl border border-slate-700 shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
                <div class="bg-slate-900 rounded-2xl p-8 aspect-video flex flex-col items-center justify-center text-center">
                    <i class="ri-cpu-line text-7xl text-teal-500 mb-4 animate-[spin_4s_linear_infinite]"></i>
                    <p class="text-white font-bold text-xl">Precizní diagnostika</p>
                    <p class="text-slate-400 text-sm mt-2">Pájení a opravy na úrovni součástek</p>
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
                    <h2 class="text-3xl font-black text-slate-900 mb-6">Opravit, nebo vyhodit?</h2>
                    <p class="mb-4">Dnešní doba nás učí pokazivší se věci vyhazovat a kupovat nové. Často je ale závada jen v jedné drobné součástce – vyschlém kondenzátoru, vypálené LED diodě nebo ulomeném konektoru.</p>
                    <p>Za zlomek ceny nového zařízení vám to dokážu opravit. Ušetříte peníze a navíc pomůžete přírodě tím, že nevytvoříte další zbytečný elektroodpad.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <i class="ri-tv-line text-3xl text-teal-600 mb-4 block"></i>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Opravy televizorů</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Výměna vadného LED podsvícení</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Opravy napájecích zdrojů (TV se nezapne)</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Řešení problémů se zvukem či obrazem</li>
                        </ul>
                    </div>
                    
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <i class="ri-plug-line text-3xl text-teal-600 mb-4 block"></i>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Drobná elektronika a PC</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Opravy set-top boxů a přijímačů</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Výměna konektorů a mikrospínačů</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Čištění a údržba zařízení</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-teal-600 rounded-3xl p-8 text-white shadow-xl shadow-teal-600/20 sticky top-8">
                    <h3 class="text-2xl font-bold mb-6">Jak to funguje?</h3>
                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-search-eye-line text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">1. Diagnostika</h4>
                                <p class="text-teal-100 text-sm mt-1">Zařízení převezmu u mě v Klimkovicích, rozeberu ho a najdu příčinu závady.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-phone-find-line text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">2. Konzultace ceny</h4>
                                <p class="text-teal-100 text-sm mt-1">Předem vám zavolám, co je špatně a kolik bude stát oprava. Žádné skryté poplatky.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-thumb-up-fill text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">3. Oprava a testování</h4>
                                <p class="text-teal-100 text-sm mt-1">Vadný díl vyměním, zapájím a přístroj důkladně otestuji před předáním.</p>
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
        <h2 class="text-3xl font-black text-slate-900 mb-4">Máte doma pokažený přístroj?</h2>
        <p class="text-slate-600 mb-8 text-lg">Zastavte se v mém servisu v Klimkovicích, nebo mi nejdříve zavolejte, ať se domluvíme, jestli má oprava smysl.</p>
        <a href="{{ route('kontakt') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl text-white bg-slate-900 hover:bg-slate-800 font-bold text-lg shadow-lg transition-all hover:-translate-y-1">
            Přejít na kontakty <i class="ri-arrow-right-line"></i>
        </a>
    </div>
</div>
@endsection