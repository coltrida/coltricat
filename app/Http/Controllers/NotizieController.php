<?php

namespace App\Http\Controllers;

use App\Models\Notizia;
use Illuminate\Http\Request;

class NotizieController extends Controller
{
    public function crea()
    {
        return view('front.creanotizia');
    }

    public function salva(Request $request)
    {
        $notizia = new Notizia();
        $notizia->titolo = $request->input('titolo');
        $notizia->testo = $request->input('testo');
        $notizia->save();
        return redirect()->route('notizie');
    }

    public function lista()
    {
        $notizie = Notizia::latest()->paginate(3);
        return view('front.notizie', compact('notizie'));
    }
}
