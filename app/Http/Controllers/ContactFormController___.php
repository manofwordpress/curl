<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function redirect;
use sharkas\Contactform\Models\ContactForm;

class ContactFormController extends Controller
{
    public function index(){
        return view('Contactform::contact');
    }

    public function sendEmail(Request $request){
        ContactForm::create($request->all());
        return redirect(route('contact'));
    }
}
