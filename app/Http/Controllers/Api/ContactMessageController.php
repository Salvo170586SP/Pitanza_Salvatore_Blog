<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Validator;

class ContactMessageController extends Controller
{
    public function send(Request $request){

       $data =  $request->all();

       //validazione
        $validator = Validator::make($data, [
            'email' => 'required|email',
            'message' => 'required',
        ],[
            'email.required' => 'la mail è obbligatoria',
            'email.email' => 'l\'indirizzo email non è valido',
            'message.required' => 'il messaggio è obbligatorio',
        ]);

        if($validator->fails()){
            return response()->json(['errors'=> $validator->errors()]);
        };


        $mail = new ContactMessageMail($data);
        Mail::to(env('MAIL_ADMIN'))->send($mail);


       return response('Mail sent', 204);

    }
}
