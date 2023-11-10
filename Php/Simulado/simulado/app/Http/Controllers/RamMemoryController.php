<?php

namespace App\Http\Controllers;

use App\Models\RamMemory;
use Illuminate\Http\Request;

class RamMemoryController extends Controller
{
    public function index()
    {
        $ramMemory = RamMemory::all();

        return response()->json(['rammemory' => $ramMemory]);
    }
}
