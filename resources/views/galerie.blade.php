@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

<main class="py-24 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-sm font-bold mb-4">
                <i class="ri-gallery-fill"></i> Portfolio
            </div>
            <h1 class="text-5xl font-black text-slate-900 mb-6">Moje <span class="text-blue-700">práce</span></h1>
            <p class="text-lg text-slate-600">Prohlédněte si kompletní galerii mých realizací. Od montáží antén až po složité kamerové a zabezpečovací systémy.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($photos as $photo)
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg border border-slate-100 group transition-transform duration-300 hover:shadow-xl flex flex-col">
                
                <a href="{{ Storage::url($photo->image_path) }}" class="glightbox block relative h-64 overflow-hidden bg-slate-200 cursor-zoom-in" data-gallery="portfolio" data-title="{{ $photo->title }}" data-description="{{ $photo->description }}">
                    
                    <img src="{{ Storage::url($photo->image_path) }}" alt="{{ $photo->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    
                    <div class="absolute inset-0 bg-blue-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center text-blue-600 shadow-lg transform scale-50 group-hover:scale-100 transition-transform duration-300">
                            <i class="ri-search-eye-line text-2xl"></i>
                        </div>
                    </div>

                    @if($photo->category)
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg text-sm font-bold text-slate-800 shadow-sm">
                        {{ $photo->category }}
                    </div>
                    @endif
                </a>
                
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $photo->title }}</h3>
                    @if($photo->description)
                        <p class="text-slate-600 text-sm line-clamp-3">{{ $photo->description }}</p>
                    @endif
                </div>
            </div>
            @empty
            
            <div class="col-span-full text-center py-16 bg-white rounded-3xl border border-slate-100 shadow-sm">
                <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4 text-slate-400 text-4xl">
                    <i class="ri-image-add-line"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Zatím tu nejsou žádné fotky</h3>
                <p class="text-slate-500">Fotky z realizací se zde objeví brzy.</p>
            </div>
            @endforelse
        </div>

    </div>
</main>

<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Inicializace Lightboxu
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            zoomable: true
        });
    });
</script>
@endsection