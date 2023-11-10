<?php

namespace App\Http\Controllers;

use App\Models\StorageDevice;
use Illuminate\Http\Request;

class StorageDeviceController extends Controller
{
    public function index()
    {
        $storageDevice = StorageDevice::all();

        return response()->json(['storagedevice' => $storageDevice]);
    }
}
