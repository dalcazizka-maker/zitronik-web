<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Zitronik.cz')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">
    
    @include('partials.nav') 

    <main>
        @yield('content')
    </main>

<footer class="bg-slate-950 pt-16 pb-8 border-t-4 border-blue-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-12">
            
            <div class="md:col-span-5">
                <a href="/" class="text-3xl font-black text-white tracking-tight flex items-center gap-2 mb-4">
                    <i class="ri-thunderstorms-fill text-blue-500"></i> ZITRONIK
                </a>
                <p class="text-slate-400 text-sm leading-relaxed max-w-sm">
                    Profesionální montáže antén, kamerových systémů, alarmů Jablotron a spolehlivý servis elektroniky pro Ostravu a okolí.
                </p>
            </div>

            <div class="md:col-span-3">
                <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-sm">Služby</h4>
                <ul class="space-y-2 text-sm text-slate-400">
                    <li><a href="{{ route('sluzby.anteny') }}" class="hover:text-blue-400 transition-colors">Antény a satelity</a></li>
                    <li><a href="{{ route('sluzby.kamery') }}" class="hover:text-blue-400 transition-colors">Kamery a zabezpečení</a></li>
                    <li><a href="{{ route('sluzby.servis') }}" class="hover:text-blue-400 transition-colors">Servis elektroniky</a></li>
                    <li><a href="{{ route('sluzby.weby') }}" class="hover:text-blue-400 transition-colors">Tvorba webů</a></li>
                </ul>
            </div>

            <div class="md:col-span-4">
                <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-sm">Kontakt</h4>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li class="flex items-start gap-3">
                        <i class="ri-map-pin-2-fill text-blue-500 mt-0.5"></i>
                        <span>Servis: Náměstí 71, Klimkovice, 74283<br>Výjezdy: Moravskoslezský kraj</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ri-phone-fill text-blue-500"></i>
                        <a href="tel:+420734130467" class="hover:text-white transition-colors font-bold">+420 734 130 467</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ri-mail-send-fill text-blue-500"></i>
                        <a href="mailto:info@zitronik.cz" class="hover:text-white transition-colors">dalca.zizka@seznam.cz</a>
                    </li>
                </ul>
            </div>
            
        </div>

        <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-slate-500 text-xs">
                &copy; {{ date('Y') }} Zitronik.cz. Všechna práva vyhrazena.
            </p>
            
            <div class="flex items-center gap-4 text-xs text-slate-700">
                <a href="{{ route('login') }}" class="hover:text-slate-400 transition-colors">Přihlášení</a>
                <span class="w-1 h-1 rounded-full bg-slate-800"></span>

            </div>
        </div>

    </div>
</footer>
</body>
</html>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Zpracování při příchodu z jiné podstránky (např. z Kamer na /#sluzby)
            if (window.location.hash) {
                // Počkáme malinkou chvíli, než prohlížeč sám odscroluje, a pak # z URL vymažeme
                setTimeout(function() {
                    history.replaceState(null, document.title, window.location.pathname + window.location.search);
                }, 100); 
            }

            // 2. Zpracování při kliknutí na odkaz přímo na stránce
            const navLinks = document.querySelectorAll('a[href*="#"]');
            navLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    // Získáme název sekce (např. "sluzby") z odkazu
                    const targetId = this.getAttribute('href').split('#')[1];
                    const targetElement = document.getElementById(targetId);

                    // Pokud sekce na této stránce existuje, převezmeme nad tím kontrolu
                    if (targetElement) {
                        e.preventDefault(); // Zastavíme běžné chování (které dělá ten křížek)
                        targetElement.scrollIntoView({ behavior: 'smooth' }); // Plynule odscrolujeme
                        
                        // Zajistíme, že URL zůstane čisté
                        history.replaceState(null, document.title, window.location.pathname + window.location.search);
                    }
                });
            });
        });
    </script>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');

            if(btn && menu) {
                btn.addEventListener('click', function() {
                    menu.classList.toggle('hidden');
                });

                // Zavře menu, když klikneš na nějaký odkaz v něm (aby nezůstalo viset)
                const mobileLinks = menu.querySelectorAll('a');
                mobileLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        menu.classList.add('hidden');
                    });
                });
            }
        });
    </script>