<nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-blue-700 rounded-lg flex items-center justify-center text-white font-bold">Z</div>
                <a href="{{ route('home') }}" class="text-xl font-black ...">
                    ZITRONIK<span class="text-blue-700">.cz</span>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-6">
                <div class="relative group">
                    <a href="{{ route('home') }}#sluzby" class="text-slate-600 group-hover:text-blue-700 font-medium transition flex items-center gap-1 py-4">
                        Služby 
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    
                    <div class="absolute top-full left-0 w-64 bg-white rounded-2xl shadow-xl border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left scale-95 group-hover:scale-100 z-50">
                        <div class="p-2 flex flex-col">
                            <a href="{{ route('sluzby.anteny') }}" class="px-4 py-3 hover:bg-slate-50 rounded-xl text-slate-700 hover:text-blue-700 transition flex items-center gap-3 font-medium">
                                <i class="ri-broadcast-line text-blue-500"></i> Antény a Satelity
                            </a>
                            <a href="{{ route('sluzby.kamery') }}" class="px-4 py-3 hover:bg-slate-50 rounded-xl text-slate-700 hover:text-blue-700 transition flex items-center gap-3 font-medium">
                                <i class="ri-shield-check-line text-blue-500"></i> Zabezpečení a Kamery
                            </a>
                            <a href="{{ route('sluzby.servis') }}" class="px-4 py-3 hover:bg-slate-50 rounded-xl text-slate-700 hover:text-blue-700 transition flex items-center gap-3 font-medium">
                                <i class="ri-tools-line text-blue-500"></i> Servis elektroniky
                            </a>
                            <a href="{{ route('sluzby.weby') }}" class="px-4 py-3 hover:bg-slate-50 rounded-xl text-slate-700 hover:text-blue-700 transition flex items-center gap-3 font-medium">
                                <i class="ri-code-s-slash-line text-blue-500"></i> Tvorba webů
                            </a>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('home') }}#o-mne" class="text-slate-600 hover:text-blue-700 font-medium transition">O mně</a>
                <a href="{{ route('home') }}#portfolio" class="text-slate-600 hover:text-blue-700 font-medium transition">Portfolio</a>
                <a href="{{ route('galerie') }}" class="text-slate-600 hover:text-blue-700 font-medium transition">Galerie</a>
                <a href="{{ route('kontakt') }}" class="text-slate-600 hover:text-blue-700 font-medium transition">Kontakt</a>
                
                <div class="h-6 w-px bg-slate-200 mx-2"></div>


            </div>

            <button id="mobile-menu-btn" class="md:hidden text-slate-600 hover:text-blue-700 focus:outline-none p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
            
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-200 absolute w-full left-0 top-16 shadow-2xl z-40">
        <div class="flex flex-col px-6 py-4 space-y-4">
            <div class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-2">Služby</div>
            <a href="{{ route('sluzby.anteny') }}" class="text-slate-700 font-medium text-lg flex items-center gap-3">
                <i class="ri-broadcast-line text-blue-500"></i> Antény a Satelity
            </a>
            <a href="{{ route('sluzby.kamery') }}" class="text-slate-700 font-medium text-lg flex items-center gap-3">
                <i class="ri-shield-check-line text-blue-500"></i> Zabezpečení a Kamery
            </a>
            <a href="{{ route('sluzby.servis') }}" class="text-slate-700 font-medium text-lg flex items-center gap-3">
                <i class="ri-tools-line text-blue-500"></i> Servis elektroniky
            </a>
                                        
            <a href="{{ route('sluzby.weby') }}" class="text-slate-700 font-medium text-lg flex items-center gap-3">
                <i class="ri-code-s-slash-line  text-blue-500"></i> Tvorba webů
            </a>
            <div class="h-px bg-slate-100 my-2"></div>
            
            <a href="{{ route('home') }}#o-mne" class="text-slate-700 font-medium text-lg">O mně</a>
            <a href="{{ route('home') }}#portfolio" class="text-slate-700 font-medium text-lg">Portfolio</a>
            <a href="{{ route('galerie') }}" class="text-slate-700 font-medium text-lg">Galerie</a>
            <a href="{{ route('kontakt') }}" class="text-slate-700 font-medium text-lg">Kontakt</a>
            
<div class="h-px bg-slate-100 my-2"></div>

           
        </div>
    </div>
</nav>