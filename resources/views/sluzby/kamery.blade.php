@extends('layouts.main')
@section('title', 'Kamerové systémy a alarmy Jablotron | Zitronik')

@section('content')
<div class="relative bg-slate-900 py-20 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-indigo-500 via-slate-900 to-slate-900"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center lg:text-left flex flex-col lg:flex-row items-center gap-12">
        <div class="lg:w-1/2">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-300 text-sm font-bold mb-6 border border-indigo-500/30">
                <i class="ri-shield-check-fill"></i> Ochrana majetku 24/7
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-white mb-6 leading-tight">
                Mějte svůj domov <br><span class="text-indigo-400">pod kontrolou. Odkudkoliv.</span>
            </h1>
            <p class="text-lg text-slate-300 mb-8 max-w-2xl">
                Zabezpečím váš dům, byt i firmu. Provádím čisté montáže špičkových kamerových systémů Hikvision a spolehlivých alarmů Jablotron 100+ s napojením na váš mobil.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="{{ route('kontakt') }}" class="px-8 py-4 rounded-xl text-white bg-indigo-600 hover:bg-indigo-500 font-bold text-lg shadow-lg shadow-indigo-600/30 transition-all hover:-translate-y-1 flex items-center justify-center gap-2">
                    <i class="ri-mail-send-fill"></i> Poptat nacenění
                </a>
                <a href="tel:+420734130467" class="px-8 py-4 rounded-xl text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 font-bold text-lg transition-all flex items-center justify-center gap-2">
                    Volat technika
                </a>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full max-w-md">
            <div class="bg-slate-800 p-2 rounded-3xl border border-slate-700 shadow-2xl transform -rotate-2 hover:rotate-0 transition-transform duration-500">
                <div class="bg-slate-900 rounded-2xl p-8 aspect-video flex flex-col items-center justify-center text-center relative overflow-hidden">
                    <div class="absolute top-4 right-4 flex gap-1">
                        <div class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></div>
                        <span class="text-[10px] text-slate-500 font-bold uppercase tracking-wider">REC</span>
                    </div>
                    <i class="ri-camera-lens-line text-7xl text-indigo-500 mb-4"></i>
                    <p class="text-white font-bold text-xl">Chytré zabezpečení</p>
                    <p class="text-slate-400 text-sm mt-2">Kamery a senzory Jablotron</p>
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
                    <h2 class="text-3xl font-black text-slate-900 mb-6">Spolete se na profesionály</h2>
                    <p class="mb-4">Kvalitní zabezpečení není jen o nákupu krabiček na internetu. Jde o správné umístění kamer, skryté vedení kabeláže, aby ji nešlo snadno přestřihnout, a hlavně o <strong>spolehlivé nastavení systému</strong>.</p>
                    <p>Navrhnu vám řešení přesně na míru vaší nemovitosti, vše profesionálně nainstaluji a naučím vás systém jednoduše ovládat z jedné aplikace v telefonu.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <i class="ri-vidicon-line text-3xl text-indigo-600 mb-4 block"></i>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Kamerové systémy (CCTV)</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> IP a analogové HD kamery Hikvision</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Záznamová zařízení (NVR/DVR) s diskem</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Noční vidění a přístup z mobilu</li>
                        </ul>
                    </div>
                    
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <i class="ri-shield-keyhole-line text-3xl text-indigo-600 mb-4 block"></i>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Alarmy Jablotron</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Montáž ústředen Jablotron 100+</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Detektory pohybu, kouře a rozbití skla</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Možnost napojení na pult centrální ochrany</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-indigo-600 rounded-3xl p-8 text-white shadow-xl shadow-indigo-600/20 sticky top-8">
                    <h3 class="text-2xl font-bold mb-6">Proč to nechat na mně?</h3>
                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-award-fill text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Osvědčené značky</h4>
                                <p class="text-indigo-100 text-sm mt-1">Montuji pouze techniku, které sám věřím a která má dlouhou životnost.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-eye-off-fill text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Čistá montáž</h4>
                                <p class="text-indigo-100 text-sm mt-1">Zakládám si na tom, aby nikde zbytečně nevisely kabely a vše vypadalo esteticky.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-smartphone-line text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Zaškolení</h4>
                                <p class="text-indigo-100 text-sm mt-1">Systém vám nejen namontuji, ale vše vám krok za krokem vysvětlím.</p>
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
        <h2 class="text-3xl font-black text-slate-900 mb-4">Zajímá vás cena pro váš dům?</h2>
        <p class="text-slate-600 mb-8 text-lg">Každý objekt je jiný. Napište mi, co potřebujete ochránit, a já vám připravím návrh řešení.</p>
        <a href="{{ route('kontakt') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl text-white bg-slate-900 hover:bg-slate-800 font-bold text-lg shadow-lg transition-all hover:-translate-y-1">
            Přejít na kontakty <i class="ri-arrow-right-line"></i>
        </a>
    </div>
</div>
@endsection