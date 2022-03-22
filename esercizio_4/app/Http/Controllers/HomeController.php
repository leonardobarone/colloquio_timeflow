<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $validationRules = [
        "name" => "required|min:2|max:50",
        "surname" => "required|min:2|max:50",
        "email" => "required|email|max:50",
    ];

    public function index()
    {
        return view('welcome');
    }

    public function like()
    {
        return view('like');
    }

    public function social()
    {
        return view('social');
    }

    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request) 
    {
        $request->validate($this->validationRules);
        $newContact = new Contact();
        $newContact->name = $request->name;
        $newContact->surname = $request->surname;
        $newContact->email = $request->email;
        $newContact->save();
        return redirect()->route('welcome')->with('success', 'Il vostro contatto è stato segnalato!');
    }
}
