<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();

        return view('welcome',['events'=> $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function contact(){
        return view('contact');
    }

    public function search(){
        $search = request('search');

        return view('product_dois',['search' => $search]);
    }

    public function product ($id = null) {
        return view('product',['id' => $id]);
    }
}
