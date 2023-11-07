<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EvcentController extends Controller
{
    public function index()//convenção de que a barra seja o index
    {
      $events = Event::all(); // pega todos os registros do banco

      return view('welcome', ['events' => $events]);
    }

    public function create()
    {
        return view('events.create');
    }

}
