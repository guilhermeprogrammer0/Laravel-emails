<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $sent = Mail::to('guilherme003souza@gmail.com','Guilherme')->send(new Contact([
            'fromname'=> $request->nome,
            'fromemail'=> $request->email,
            'assunto'=> $request->assunto,
            'mensagem'=> $request->mensagem
        ]));

        var_dump('email_send',$sent);
    }
}
