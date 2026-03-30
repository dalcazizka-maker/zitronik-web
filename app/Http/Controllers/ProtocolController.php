<?php

namespace App\Http\Controllers;

use App\Models\Protocol;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProtocolController extends Controller
{
    // 1. Zobrazení seznamu všech protokolů
    public function index()
    {
        $protocols = Protocol::orderBy('created_at', 'desc')->get();
        return view('admin.protocols.index', compact('protocols'));
    }

    // 2. Zobrazení formuláře pro nový protokol
    public function create()
    {
        return view('admin.protocols.create');
    }

    // 3. Uložení protokolu do databáze
    public function store(Request $request)
    {
        // Kontrola
        $data = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'nullable|string|max:20',
            'device' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'nullable|integer',
        ]);

        // Číslování
        $lastProtocol = Protocol::latest('id')->first();
        $nextId = $lastProtocol ? $lastProtocol->id + 1 : 1;
        $data['protocol_number'] = date('Y') . '-' . str_pad($nextId, 3, '0', STR_PAD_LEFT);

        Protocol::create($data);

        return redirect()->route('protocols.index')->with('success', 'Protokol byl úspěšně vytvořen.');
    }

    // 4. Vygenerování a stažení PDF
    public function downloadPdf(Protocol $protocol)
    {
        $pdf = Pdf::loadView('admin.protocols.pdf', compact('protocol'));
        return $pdf->download('Servisni_protokol_' . $protocol->protocol_number . '.pdf');
    }

    // 5. Zobrazení formuláře pro úpravu (TADY TO PŘEDTÍM CHYBĚLO)
    public function edit(Protocol $protocol)
    {
        return view('admin.protocols.edit', compact('protocol'));
    }

    // 6. Uložení upraveného protokolu do databáze (TADY TO PŘEDTÍM CHYBĚLO)
    public function update(Request $request, Protocol $protocol)
    {
        $data = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'nullable|string|max:20',
            'device' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'nullable|integer',
        ]);

        $protocol->update($data);

        return redirect()->route('protocols.index')->with('success', 'Protokol č. ' . $protocol->protocol_number . ' byl úspěšně upraven.');
    }
    // 7. Smazání protokolu
    public function destroy(Protocol $protocol)
    {
        $protocol->delete();

        return redirect()->route('protocols.index')->with('success', 'Protokol byl úspěšně a nenávratně smazán.');
    }
}