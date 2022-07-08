<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $correo = new ContactanosMailable($request->all());
        Mail::to('jhoanes.trabajo@gmail.com')->send($correo);

        return redirect()->route('contacto.index')->with('info', 'Se a recibido su solicitud');
    }


    public function show(Contacto $contacto)
    {
        //
    }

    public function edit(Contacto $contacto)
    {
        //
    }

    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    public function destroy(Contacto $contacto)
    {
        //
    }
}
