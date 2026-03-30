@extends('layouts.main')
@section('title', 'Tvorba moderních webových stránek | Zitronik')

@section('content')
<div class="relative bg-slate-900 py-20 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-orange-500 via-slate-900 to-slate-900"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center lg:text-left flex flex-col lg:flex-row items-center gap-12">
        <div class="lg:w-1/2">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-500/20 text-orange-300 text-sm font-bold mb-6 border border-orange-500/30">
                <i class="ri-macbook-line"></i> Vaše vizitka na internetu
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-white mb-6 leading-tight">
                Web, který vás <br><span class="text-orange-400">skutečně prodá.</span>
            </h1>
            <p class="text-lg text-slate-300 mb-8 max-w-2xl">
                Získejte moderní, bleskově rychlé a responzivní webové stránky. Tvořím weby na míru s čistým kódem, které budou perfektně vypadat na počítači i v mobilu.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="{{ route('kontakt') }}" class="px-8 py-4 rounded-xl text-white bg-orange-600 hover:bg-orange-500 font-bold text-lg shadow-lg shadow-orange-600/30 transition-all hover:-translate-y-1 flex items-center justify-center gap-2">
                    <i class="ri-mail-send-fill"></i> Chci nový web
                </a>
                <a href="tel:+420700100200" class="px-8 py-4 rounded-xl text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 font-bold text-lg transition-all flex items-center justify-center gap-2">
                    Probrat detaily
                </a>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full max-w-md">
            <div class="bg-slate-800 p-2 rounded-3xl border border-slate-700 shadow-2xl transform -rotate-2 hover:rotate-0 transition-transform duration-500">
                <div class="bg-slate-900 rounded-2xl p-8 aspect-video flex flex-col items-center justify-center text-center">
                    <i class="ri-layout-masonry-line text-7xl text-orange-500 mb-4 hover:scale-110 transition-transform"></i>
                    <p class="text-white font-bold text-xl">Responzivní design</p>
                    <p class="text-slate-400 text-sm mt-2">Dokonalý vzhled na všech telefonech</p>
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
                    <h2 class="text-3xl font-black text-slate-900 mb-6">Ukažte světu, co umíte</h2>
                    <p class="mb-4">Dnes už nestačí mít jen vizitku na papíře. Zákazníci si vás najdou na Googlu na svém mobilu a během prvních 3 vteřin se rozhodnou, jestli vám zavolají. <strong>Pomalý nebo zastaralý web vás připravuje o peníze.</strong></p>
                    <p>Nestavím weby na těžkopádných a pomalých šablonách. Programuji je na míru v nejmodernějších technologiích (Laravel, Tailwind CSS), díky kterým jsou extrémně rychlé, bezpečné a Google je miluje.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <i class="ri-window-line text-3xl text-orange-600 mb-4 block"></i>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Firemní a osobní weby</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Prezentační weby pro řemeslníky a firmy</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Moderní portfolia a galerie</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Kontaktní a poptávkové formuláře</li>
                        </ul>
                    </div>
                    
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <i class="ri-rocket-line text-3xl text-orange-600 mb-4 block"></i>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Technologie a SEO</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Bleskové načítání bez zasekávání</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Optimalizace pro vyhledávače (SEO)</li>
                            <li class="flex items-start gap-2"><i class="ri-check-line text-green-500 mt-0.5"></i> Propojení s Google Analytics a mapami</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-orange-600 rounded-3xl p-8 text-white shadow-xl shadow-orange-600/20 sticky top-8">
                    <h3 class="text-2xl font-bold mb-6">Proč web ode mě?</h3>
                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-speed-up-fill text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Extrémní rychlost</h4>
                                <p class="text-orange-100 text-sm mt-1">Čistý kód zaručuje, že se váš web načte bleskově na jakémkoliv zařízení.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-smartphone-line text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Mobile First</h4>
                                <p class="text-orange-100 text-sm mt-1">Více než 70 % lidí dnes používá mobil. Váš web na něm bude vypadat dokonale.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                                <i class="ri-service-line text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Zprovoznění bez starostí</h4>
                                <p class="text-orange-100 text-sm mt-1">Zařídím doménu, nasadím na server a zajistím bezpečnostní SSL certifikát.</p>
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
        <h2 class="text-3xl font-black text-slate-900 mb-4">Líbí se vám tento web?</h2>
        <p class="text-slate-600 mb-8 text-lg">Přesně takový, bleskově rychlý a moderní, mohu naprogramovat i pro vaše podnikání. Napište mi.</p>
        <a href="{{ route('kontakt') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl text-white bg-slate-900 hover:bg-slate-800 font-bold text-lg shadow-lg transition-all hover:-translate-y-1">
            Poptat tvorbu webu <i class="ri-arrow-right-line"></i>
        </a>
    </div>
</div>
@endsection