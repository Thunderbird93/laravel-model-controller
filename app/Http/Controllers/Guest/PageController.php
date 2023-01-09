<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
        public function index(){
            return view(view: 'home');
        }

        public function about(){
            return view(view: 'about');
        }

        public function elenco(){
            return view(view: 'elenco');
        }
}
