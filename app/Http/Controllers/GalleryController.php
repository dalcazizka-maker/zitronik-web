<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class GalleryController extends Controller
{
    // Tato funkce zobrazí veřejnou stránku se všemi fotkami
    public function index()
    {
        // Vytáhneme VŠECHNY viditelné fotky z databáze, seřazené od nejnovější
        $photos = Gallery::where('is_visible', true)
                         ->orderBy('created_at', 'desc')
                         ->get();

        // Pošleme je do designu (view) 'galerie'
        return view('galerie', compact('photos'));
    }
    // Tato funkce se postará o příjem fotky z formuláře, její úpravu a uložení
    public function store(Request $request)
    {
        // 1. Zkontrolujeme, že uživatel opravdu nahrál fotku a vyplnil nadpis
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:10240', // Povolíme nahrát až 10 MB soubor
            'category' => 'nullable|string',
            'description' => 'nullable|string'
        ]);

        // 2. Magie s obrázkem
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Vytvoříme si unikátní název souboru s koncovkou .webp (např. 167890_abc123.webp)
            $filename = time() . '_' . uniqid() . '.webp';
            $path = 'gallery/' . $filename;

            // Nastartujeme grafický nástroj
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);

            // Zmenšíme fotku: Pokud je širší než 1200 pixelů, zmenší se. Výška se dopočítá automaticky, aby se fotka nedeformovala.
            $image->scaleDown(width: 1200);

            // Zkonvertujeme do formátu WebP s kvalitou 80% (skvělý kompromis velikost/kvalita)
            $encoded = $image->toWebp(80);

            // Uložíme fyzický soubor do našeho "skladu"
            Storage::disk('public')->put($path, $encoded);

            // 3. Uložíme záznam do databáze, aby se fotka zobrazila na webu
            Gallery::create([
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
                'image_path' => $path, // Cesta k novému .webp souboru
                'is_visible' => true,
            ]);

            return back()->with('success', 'Paráda! Fotka je zmenšená, převedená do WebP a uložená v galerii.');
        }

        return back()->with('error', 'Něco se nepovedlo při nahrávání fotky.');
    }
}