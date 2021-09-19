<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class FrontController extends Controller
{
    public function index() {
        return view('front.home');
    }

    public function chisiamo() {
        return view('front.chisiamo');
    }

    public function gdpr() {
        return view('front.gdpr');
    }

    public function sitemap()
    {
        return response()->view('front.sitemap')->header('Content-Type', 'text/xml');
    }

    public function inviamessaggio(Request $request)
    {
        $ldate = date('d-m-Y');
        $consenso= "Ho letto l'Informativa sulla Privacy e acconsento al trattamento dei dati personali. Consenso ottenuto in data ".$ldate;
        $nome = $request->input('nome');
        $cognome = $request->input('cognome');
        $ditta = $request->input('ditta');
        $mail = $request->input('mail');
        $telefono = $request->input('telefono');
        $messaggio = $request->input('messaggio');
        Mail::send('mails.mailhome',
            [
                'consenso' => $consenso,
                'nome' => $nome,
                'cognome' => $cognome,
                'telefono' => $telefono,
                'mail' => $mail,
                'ditta' => $ditta,
                'messaggio' => $messaggio
            ], function ($message)
            {
                $subject = "Messaggio inviato dal sito Coltricat.eu";
                $message->from('info@coltricat.eu', "Coltricat");
                $message->to('info@coltricat.eu');
                $message->subject($subject);

            });
        return Redirect::route('index');
    }
}
