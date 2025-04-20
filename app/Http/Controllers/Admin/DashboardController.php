<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        dd(Auth::user());
        // return 'ciao sono la index';
    }

    public function profile(){
        return 'ciao sono la pagina del profilo per admin';
    }
}
