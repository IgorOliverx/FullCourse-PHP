<?php

namespace App\Http\Controllers;

use App\Models\MotherBoard;
use Illuminate\Http\Request;

class MotherBoardController extends Controller
{
    public function index( )
    {
        $motherBoard = MotherBoard::all();

        return response()->json(['motherboard' => $motherBoard]);
    }
}
