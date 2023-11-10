<?php

namespace App\Http\Controllers;

use App\Models\GraphicCard;
use Illuminate\Http\Request;

class GraphicCardController extends Controller
{
    public function index( )
    {
        $graphicCard = GraphicCard::all();

        return response()->json(['graphiccard' => $graphicCard]);
    }

}
