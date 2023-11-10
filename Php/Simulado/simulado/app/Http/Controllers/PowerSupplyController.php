<?php

namespace App\Http\Controllers;

use App\Models\PowerSupply;
use Illuminate\Http\Request;

class PowerSupplyController extends Controller
{
    public function index()
    {
        $power = PowerSupply::all();

        return response()->json(['powersupply' => $power]);
    }
}
