<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        $email = new ContactanosMailable($request->all());
        Mail::to('santiiiago4@gmail.com')->send($email);

        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
