<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AppController extends Controller
{
    public function index() {
    	return \View::make('index');
    }

    public function page(Request $r) {
    	return \View::make('index');
    }

    public function prev(Request $r) {
    	if(str_replace("http://localhost:8000/page/","",\URL::previous()) <= 1){
    		return redirect("http://localhost:8000/page/1");
    	}
    	else{
			return redirect("http://localhost:8000/page/".(str_replace("http://localhost:8000/page/","",\URL::previous())-1));
    	}
    }

    public function next(Request $r) {
    	if(str_replace("http://localhost:8000/page/","",\URL::previous()) >= 5){
    		return redirect("http://localhost:8000/page/5");
    	}
    	else{
			return redirect("http://localhost:8000/page/".(str_replace("http://localhost:8000/page/","",\URL::previous())+1));
		}
    }
}
