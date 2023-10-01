<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Affiche la page de contact.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('contact');
    }
}
