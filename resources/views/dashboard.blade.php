<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                Ovládací panel
            </h2>
            <a href="/" class="px-4 py-2 bg-slate-800 hover:bg-slate-700 text-white text-sm font-bold rounded-lg shadow transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Zpět na web
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl mb-8 border border-slate-200">
                <div class="p-6 text-slate-800 font-medium text-lg border-l-4 border-blue-500 bg-blue-50/50">
                    Vítej v administraci! Odtud můžeš spravovat své podnikání a generovat dokumenty pro zákazníky.
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <a href="{{ route('protocols.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-200 hover:border-blue-500 hover:shadow-md transition-all group flex flex-col h-full">
                    <div class="p-6 flex-grow">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Servisní protokoly</h3>
                        <p class="text-slate-500 text-sm">Vytváření, správa a export PDF protokolů pro zákazníky z oprav a montáží.</p>
                    </div>
                    <div class="bg-slate-50 px-6 py-3 border-t border-slate-100 text-blue-600 font-bold text-sm flex items-center justify-between">
                        Přejít na protokoly <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </div>
                </a>

                <a href="/" class="bg-slate-900 overflow-hidden shadow-sm sm:rounded-xl border border-slate-800 hover:bg-slate-800 hover:shadow-md transition-all group flex flex-col h-full">
                    <div class="p-6 flex-grow">
                        <div class="w-12 h-12 bg-slate-800 text-white rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform shadow-inner">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Veřejný web</h3>
                        <p class="text-slate-400 text-sm">Otevřít hlavní stránku webu tak, jak ji reálně vidí vaši zákazníci.</p>
                    </div>
                    <div class="bg-slate-950 px-6 py-3 border-t border-slate-800 text-white font-bold text-sm flex items-center justify-between">
                        Zobrazit web <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </div>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>