@extends('layouts.main')
@section('title', 'Kontakt | Zitronik')

@section('content')
<div class="py-16 lg:py-24 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 right-0 -translate-y-12 translate-x-1/3 w-96 h-96 bg-blue-100/50 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-4">Ozvěte se, <span class="text-blue-700">vyřešíme to.</span></h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Potřebujete opravit anténu, namontovat kamery nebo nacenit alarm? Zavolejte mi, nebo mi nechte zprávu a já se vám co nejdříve ozvu.</p>
        </div>

        <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-start">
            
            <div class="lg:col-span-5 mb-12 lg:mb-0 space-y-8">
                
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-bl-full -z-10"></div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Přímý kontakt</h3>
                    
                    <div class="space-y-6">
                        <a href="tel:+420700100200" class="flex items-center gap-4 group">
                            <div class="w-12 h-12 bg-blue-100 text-blue-700 rounded-2xl flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                                <i class="ri-phone-fill"></i>
                            </div>
                            <div>
                                <p class="text-sm text-slate-500 font-medium mb-1">Zavolejte mi</p>
                                <p class="text-xl font-black text-slate-900 group-hover:text-blue-700 transition-colors">+420 700 100 200</p>
                            </div>
                        </a>
                        
                        <a href="mailto:info@zitronik.cz" class="flex items-center gap-4 group">
                            <div class="w-12 h-12 bg-slate-100 text-slate-600 rounded-2xl flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                                <i class="ri-mail-send-fill"></i>
                            </div>
                            <div>
                                <p class="text-sm text-slate-500 font-medium mb-1">Napište e-mail</p>
                                <p class="text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">info@zitronik.cz</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="bg-slate-900 p-8 rounded-3xl shadow-xl text-white">
                    <h3 class="text-xl font-bold mb-6 flex items-center gap-3">
                        <i class="ri-map-pin-2-fill text-blue-400"></i> Kde mě najdete
                    </h3>
                    <div class="space-y-4 text-slate-300">
                        <div class="flex items-start gap-3">
                            <i class="ri-store-2-line text-slate-400 mt-1"></i>
                            <div>
                                <strong class="text-white">Servisní centrum Zitronik</strong><br>
                                <span class="text-slate-400">Tady probíhají opravy elektroniky</span><br>
                                Ulice / Číslo popisné 123<br>
                                742 83 Klimkovice
                            </div>
                        </div>
                        <div class="h-px bg-slate-700/50 my-2"></div>
                        <p class="flex items-start gap-3">
                            <i class="ri-car-line text-slate-400 mt-1"></i>
                            <span><strong>Výjezdy na montáže:</strong><br>Ostrava a celý Moravskoslezský kraj</span>
                        </p>
                        <div class="h-px bg-slate-700/50 my-2"></div>
                        <p class="flex items-start gap-3 text-sm">
                            <i class="ri-time-line text-slate-400 mt-1"></i>
                            <span>Po – Pá: 8:00 – 18:00<br>Víkendy: Dle dohody (pohotovost)</span>
                        </p>
                    </div>
                </div>

            </div>

            <div class="lg:col-span-7">
                <div class="bg-white p-8 md:p-10 rounded-3xl shadow-xl border border-slate-100 h-full">
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Napište mi zprávu</h3>
                    
                    <form action="{{ route('kontakt.send') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="name" class="block text-sm font-bold text-slate-700">Jméno a příjmení *</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-600 focus:border-blue-600 bg-slate-50 focus:bg-white transition-colors outline-none" placeholder="Jan Novák">
                            </div>
                            <div class="space-y-2">
                                <label for="phone" class="block text-sm font-bold text-slate-700">Telefonní číslo *</label>
                                <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-600 focus:border-blue-600 bg-slate-50 focus:bg-white transition-colors outline-none" placeholder="+420 ...">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-bold text-slate-700">E-mail (pro zaslání nabídky)</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-600 focus:border-blue-600 bg-slate-50 focus:bg-white transition-colors outline-none" placeholder="vas@email.cz">
                        </div>

                        <div class="space-y-2">
                            <label for="message" class="block text-sm font-bold text-slate-700">S čím potřebujete pomoci? *</label>
                            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-600 focus:border-blue-600 bg-slate-50 focus:bg-white transition-colors outline-none resize-none" placeholder="Dobrý den, potřeboval bych nacenit kamerový systém pro rodinný dům v Ostravě..."></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 bg-blue-700 hover:bg-blue-800 text-white font-bold rounded-xl shadow-lg shadow-blue-700/30 transition-all hover:-translate-y-1 flex items-center justify-center gap-2 text-lg">
                            Odeslat poptávku <i class="ri-send-plane-fill"></i>
                        </button>
                    </form>
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-6 font-bold">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>

        </div>

        <div class="mt-16 bg-white p-2 rounded-3xl shadow-xl border border-slate-100 transform hover:scale-[1.01] transition-transform duration-500">
            <div class="rounded-2xl overflow-hidden h-[400px] w-full bg-slate-100 relative">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2575.9861472267376!2d18.129185677534657!3d49.78632543495816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4713e67cd9f034c7%3A0xd0b7b56f66d01b06!2zTsOhbcSbc3TDrSA3MSwgNzQyIDgzIEtsaW1rb3ZpY2U!5e0!3m2!1scs!2scz!4v1774697425352!5m2!1scs!2scz" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

    </div>
</div>
@endsection