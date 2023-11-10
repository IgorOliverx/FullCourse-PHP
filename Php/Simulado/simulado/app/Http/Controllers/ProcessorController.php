<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    public function index()
    {
        $processor = Processor::all();

        return response()->json(['processor' => $processor]);
    }
}
