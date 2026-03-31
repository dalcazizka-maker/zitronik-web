@extends('layouts.main')
@section('content')
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

<main class="relative overflow-hidden bg-slate-50 pt-16 pb-24 lg:pt-32 lg:pb-32">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 transform blur-3xl opacity-30 pointer-events-none">
        <div class="aspect-[1155/678] w-[72rem] bg-gradient-to-tr from-blue-600 to-sky-300"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
            
            <div class="sm:text-center lg:text-left lg:col-span-6">
                
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-blue-100 text-blue-800 text-sm font-bold mb-8 shadow-sm">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-500 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-600"></span>
                    </span>
                    Technik pro Ostravu a Moravskoslezský kraj
                </div>
                
                <h1 class="text-5xl tracking-tight font-black text-slate-900 sm:text-6xl md:text-6xl leading-tight">
                    <span class="block mb-2">Perfektní signál a</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-sky-500">bezpečný domov</span>
                </h1>
                
                <p class="mt-6 text-lg text-slate-600 max-w-2xl sm:mx-auto lg:mx-0 leading-relaxed font-medium">
                    Už žádné kostičkování obrazu. Specializuji se na <strong class="text-slate-900 bg-blue-50 px-1 rounded">měření a montáže antén či satelitů</strong>, instalaci kamerových systémů a špičkových alarmů Jablotron.
                </p>
                
                <div class="mt-10 flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <a href="{{ route('kontakt') }}"class="px-8 py-4 rounded-2xl text-white bg-blue-700 hover:bg-blue-800 font-bold text-lg shadow-xl shadow-blue-700/30 transition-all hover:-translate-y-1 flex items-center justify-center gap-3">
                        <i class="ri-phone-fill text-xl"></i> Kontakt
                    </a>
                    <a href="#sluzby" class="px-8 py-4 rounded-2xl text-slate-700 bg-white border-2 border-slate-200 hover:border-blue-300 hover:text-blue-700 font-bold text-lg transition-all flex items-center justify-center gap-2">
                        Prohlédnout služby
                    </a>
                </div>

                <div class="mt-12 pt-8 border-t border-slate-200/60 flex flex-wrap items-center justify-center lg:justify-start gap-8 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                    <div class="flex items-center gap-2 font-black tracking-wider text-slate-700">
                        <i class="ri-tv-2-fill text-2xl text-blue-600"></i> DVB-T2 & SAT
                    </div>
                    <div class="flex items-center gap-2 font-black tracking-widest text-slate-700">
                        JABLOTRON
                    </div>
                                        <div class="flex items-center gap-2 font-black tracking-widest text-slate-700">
                        CPPLUS
                    </div>
                    <div class="flex items-center gap-2 font-black tracking-widest text-slate-700">
                        HIKVISION
                    </div>
                </div>
            </div>

            <div class="mt-20 lg:mt-0 lg:col-span-6 relative hidden md:block">
                <div class="relative mx-auto w-full max-w-lg rounded-[2.5rem] shadow-2xl border-[8px] border-white bg-slate-900 aspect-square transform hover:scale-[1.02] transition-transform duration-700 flex items-center justify-center group overflow-hidden">
                    
                    <div class="absolute inset-0 bg-gradient-to-br from-slate-800 to-blue-900 opacity-90"></div>
                    
                    <i class="ri-home-wifi-fill text-[10rem] text-slate-700 group-hover:text-blue-400 transition-colors duration-700 relative z-10"></i>
                    
                    <div class="absolute w-[200%] h-[200%] border-[40px] border-white/5 rounded-full animate-[ping_10s_cubic-bezier(0,0,0.2,1)_infinite]"></div>
                </div>

                <div class="absolute top-1/4 -left-8 bg-white/95 backdrop-blur-sm p-4 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-4 animate-[bounce_4s_infinite]">
                    <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600 shadow-inner">
                        <i class="ri-broadcast-fill text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Měření signálu</p>
                        <p class="text-slate-900 font-black">100% Kvalita DVB-T2</p>
                    </div>
                </div>

                <div class="absolute bottom-1/4 -right-4 bg-white/95 backdrop-blur-sm p-4 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-4 animate-[bounce_5s_infinite_reverse]">
                    <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 shadow-inner">
                        <i class="ri-shield-check-fill text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Jablotron</p>
                        <p class="text-slate-900 font-black">Objekt střežen</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 relative z-20">
    <div class="bg-white rounded-3xl shadow-xl border border-slate-100 p-6 flex flex-col md:flex-row items-center justify-between gap-6 backdrop-blur-sm bg-white/90">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600">
                <i class="ri-truck-line text-2xl"></i>
            </div>
            <div>
                <p class="text-slate-900 font-bold">Expresní technický servis</p>
                <p class="text-slate-500 text-sm">Přijedu k vám po celém kraji a okolí.</p>
            </div>
        </div>
        
        <div class="flex items-center gap-3">
            <a href="tel:+420734130467" class="flex items-center gap-2 text-blue-700 font-black text-xl hover:scale-105 transition-transform">
                <i class="ri-phone-fill"></i> +420 734 130 467
            </a>
            <div class="h-8 w-px bg-slate-200 mx-2 hidden md:block"></div>
            <p class="text-xs text-slate-400 uppercase font-bold tracking-widest hidden lg:block">Po – Pa: 9:00 – 16:00</p>
        </div>
    </div>
</div>
<section id="sluzby" class="py-24 bg-white relative z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-sm font-bold tracking-widest text-blue-600 uppercase mb-3">S čím vám pomohu</h2>
            <p class="text-4xl font-black text-slate-900 mb-6">Špičková technika, <span class="text-blue-700">čistá montáž.</span></p>
            <p class="text-lg text-slate-600">Od zachycení dokonalého televizního signálu, přes špičkové zabezpečení vaší rodiny, záchranu pokažené elektroniky až po moderní prezentaci na internetu.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="bg-slate-50 rounded-3xl p-8 hover:-translate-y-2 transition-transform duration-300 border border-slate-100 shadow-sm hover:shadow-xl group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100 rounded-bl-full -z-10 transition-transform group-hover:scale-110"></div>
                
                <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                    <i class="ri-broadcast-fill"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Antény a satelity</h3>
                <p class="text-slate-600 mb-6 line-clamp-3">Měření signálu, instalace DVB-T2 antén a ladění satelitů (Skylink, freeSAT). Už žádný kostičkující obraz.</p>
                
                <a href="{{ route('sluzby.anteny') }}" class="inline-flex items-center gap-2 text-blue-700 font-bold hover:text-blue-800 transition-colors mt-auto">
                    Více o službě <i class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="bg-slate-50 rounded-3xl p-8 hover:-translate-y-2 transition-transform duration-300 border border-slate-100 shadow-sm hover:shadow-xl group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-100 rounded-bl-full -z-10 transition-transform group-hover:scale-110"></div>
                
                <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                    <i class="ri-shield-check-fill"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Kamery a Jablotron</h3>
                <p class="text-slate-600 mb-6 line-clamp-3">Ochrana vašeho majetku 24/7. Montáž kamerových systémů Hikvision a spolehlivých alarmů s ovládáním z mobilu.</p>
                
                <a href="{{ route('sluzby.kamery') }}" class="inline-flex items-center gap-2 text-indigo-700 font-bold hover:text-indigo-800 transition-colors mt-auto">
                    Více o službě <i class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="bg-slate-50 rounded-3xl p-8 hover:-translate-y-2 transition-transform duration-300 border border-slate-100 shadow-sm hover:shadow-xl group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-teal-100 rounded-bl-full -z-10 transition-transform group-hover:scale-110"></div>
                
                <div class="w-16 h-16 bg-teal-100 text-teal-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-teal-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                    <i class="ri-tools-fill"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Servis a opravy</h3>
                <p class="text-slate-600 mb-6 line-clamp-3">Záchrana vaší elektroniky u mě v dílně. Opravy televizorů, výměny podsvícení a drobné pájení konektorů.</p>
                
                <a href="{{ route('sluzby.servis') }}" class="inline-flex items-center gap-2 text-teal-700 font-bold hover:text-teal-800 transition-colors mt-auto">
                    Více o službě <i class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="bg-slate-50 rounded-3xl p-8 hover:-translate-y-2 transition-transform duration-300 border border-slate-100 shadow-sm hover:shadow-xl group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-orange-100 rounded-bl-full -z-10 transition-transform group-hover:scale-110"></div>
                
                <div class="w-16 h-16 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-orange-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                    <i class="ri-macbook-line"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Moderní weby</h3>
                <p class="text-slate-600 mb-6 line-clamp-3">Bleskově rychlé webové stránky vytvořené na míru. Responzivní design, který prodá vaše služby.</p>
                
                <a href="{{ route('sluzby.weby') }}" class="inline-flex items-center gap-2 text-orange-700 font-bold hover:text-orange-800 transition-colors mt-auto">
                    Více o službě <i class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

        </div>
    </div>
</section>
<section id="o-mne" class="py-24 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            
            <div class="relative mb-12 lg:mb-0">
                <div class="absolute -top-4 -left-4 w-64 h-64 bg-blue-100 rounded-3xl -z-10"></div>
                <div class="absolute -bottom-4 -right-4 w-64 h-64 bg-slate-200 rounded-3xl -z-10"></div>
                
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-8 border-white bg-slate-200 aspect-[4/5] flex items-center justify-center group">
                    
                    <img src="{{ asset('img/o-mne.webp') }}" alt="Dalibor Žižka při montáži" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent p-8 text-white">
                        <p class="text-3xl font-black mb-1">Dalibor Žižka</p>
                        <p class="text-blue-400 font-medium flex items-center gap-2">
                            <i class="ri-map-pin-2-fill"></i> Ostrava a Moravskoslezský kraj
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-sm font-bold mb-6">
                    <i class="ri-user-star-fill"></i> Osobní přístup
                </div>
                
                <h3 class="text-4xl font-black text-slate-900 mb-6 leading-tight">
                    Technik, který nehledá výmluvy, ale <span class="text-blue-700">řešení</span>.
                </h3>
                
                <p class="text-lg text-slate-600 mb-4 leading-relaxed">
                    Jmenuji se <strong>Dalibor Žižka</strong> a elektronika je nejen moje práce, ale i vášeň. Specializuji se na montáže antén, zabezpečovacích systémů a profesionální servis elektroniky.
                </p>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Moje servisní zázemí a dílna se nachází v <strong>Klimkovicích</strong>, ale běžně vyrážím za zákazníky po celé <strong>Ostravě a širším okolí</strong>. Nedělá mi problém sednout do auta a vyřešit váš technický problém kdekoliv v rámci celého Moravskoslezského kraje.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                    <div class="flex items-center gap-4 p-4 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-blue-300 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600">
                            <i class="ri-store-2-fill text-xl"></i>
                        </div>
                        <span class="font-bold text-slate-700">Zázemí v Klimkovicích</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-blue-300 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600">
                            <i class="ri-roadster-fill text-xl"></i>
                        </div>
                        <span class="font-bold text-slate-700">Výjezdy po celém kraji</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-blue-300 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600">
                            <i class="ri-shield-check-fill text-xl"></i>
                        </div>
                        <span class="font-bold text-slate-700">Certifikace Jablotron</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-blue-300 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600">
                            <i class="ri-tools-fill text-xl"></i>
                        </div>
                        <span class="font-bold text-slate-700">Vlastní vybavení</span>
                    </div>
                </div>

                <div class="bg-slate-900 p-6 rounded-2xl relative overflow-hidden shadow-xl">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600 blur-3xl opacity-20 translate-x-10 -translate-y-10"></div>
                    <p class="text-slate-300 italic font-medium relative z-10 leading-relaxed">
                        "Zakládám si na tom, že po mně nezůstane nepořádek a že technologii, kterou vám domů nainstaluji, vám také lidsky a srozumitelně vysvětlím."
                    </p>
                    <p class="mt-4 text-white font-bold relative z-10">— Dalibor</p>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="portfolio" class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-slate-50 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-sm font-bold mb-4">
                <i class="ri-gallery-fill"></i> Moje práce
            </div>
            <h2 class="text-4xl font-black text-slate-900 mb-6">Za mě mluví <span class="text-blue-700">výsledky</span>.</h2>
            <p class="text-lg text-slate-600">Podívejte se na ukázky mých nedávných instalací. Zakládám si na čisté montáži, skrytých kabelech a 100% funkčnosti.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg border border-slate-100 group hover:-translate-y-2 transition-transform duration-300">
                <div class="relative h-64 overflow-hidden bg-slate-200">
                    <div class="absolute inset-0 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-500">
                        <i class="ri-shield-check-fill text-6xl"></i>
                    </div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg text-sm font-bold text-slate-800 shadow-sm">
                        Kamerový systém
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-blue-600 font-bold mb-2">
                        <i class="ri-map-pin-2-line"></i> Rodinný dům, Ostrava
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Instalace IP kamer Hikvision</h3>
                    <p class="text-slate-600 mb-4 line-clamp-2">Kompletní dodávka a montáž 4 bezpečnostních kamer na fasádu s nočním viděním a nahráváním na NVR disk. Kabely taženy podhledem.</p>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-lg border border-slate-100 group hover:-translate-y-2 transition-transform duration-300">
                <div class="relative h-64 overflow-hidden bg-slate-200">
                    <div class="absolute inset-0 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-500">
                        <i class="ri-broadcast-fill text-6xl"></i>
                    </div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg text-sm font-bold text-slate-800 shadow-sm">
                        Antény a signál
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-blue-600 font-bold mb-2">
                        <i class="ri-map-pin-2-line"></i> Bytový dům, Klimkovice
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Měření a oprava DVB-T2</h3>
                    <p class="text-slate-600 mb-4 line-clamp-2">Zákazníkovi vypadával obraz. Provedeno profi měření, výměna zkorodovaného zesilovače a instalace nového LTE filtru.</p>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-lg border border-slate-100 group hover:-translate-y-2 transition-transform duration-300">
                <div class="relative h-64 overflow-hidden bg-slate-200">
                    <div class="absolute inset-0 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-500">
                        <i class="ri-alarm-warning-fill text-6xl"></i>
                    </div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg text-sm font-bold text-slate-800 shadow-sm">
                        Zabezpečení
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-blue-600 font-bold mb-2">
                        <i class="ri-map-pin-2-line"></i> Firemní sklad, Bílovec
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Montáž alarmu Jablotron 100+</h3>
                    <p class="text-slate-600 mb-4 line-clamp-2">Zabezpečení skladovacích prostor. Instalace ústředny, pohybových čidel a sirény. Propojení na mobilní aplikaci majitele.</p>
                </div>
            </div>

        </div>

        <div class="mt-12 text-center">
<a href="{{ route('galerie') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-slate-100 text-slate-700 font-bold hover:bg-slate-200 transition-colors">
    Zobrazit celou galerii <i class="ri-arrow-right-line"></i>
</a>
        </div>
    </div>
</section> 
</body>
</html>
@endsection