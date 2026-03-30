<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Zkontrolujeme, že uživatel vyplnil, co měl
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'message' => 'required|string'
        ]);

        // 2. Odeslání e-mailu (Tady dej svůj reálný e-mail!)
        Mail::to('dalca.zizka@seznam.cz')->send(new ContactMail($data));

        // 3. Návrat zpět s hláškou o úspěchu
        return back()->with('success', 'Paráda! Zpráva byla úspěšně odeslána. Brzy se vám ozvu.');
    }
}