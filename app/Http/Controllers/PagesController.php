<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index(){
        return view('pages.home');
    }
    public function produse(){
        return view('pages.produse');
    }
    public function promotii(){
        return view('pages.promotii');
    }
    public function contact(){
        return view('pages.contact');
    }

}
