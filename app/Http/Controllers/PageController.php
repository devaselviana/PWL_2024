<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'deva selviana 2341760060';
    }

}
