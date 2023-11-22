<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    private $motherboard;
    private $processor;
    private $memory;
    private $storage;
    private $graphic;
    private $power;

    /**
     * @param $motherboard
     * @param $processor
     * @param $memory
     * @param $storage
     * @param $graphic
     * @param $power
     */
    public function __construct(MotherBoardController $motherboard,ProcessorController $processor, RamMemoryController $memory,StorageDeviceController $storage,GraphicCardController $graphic,PowerSupplyController $power)
    {
        $this->motherboard = $motherboard;
        $this->processor = $processor;
        $this->memory = $memory;
        $this->storage = $storage;
        $this->graphic = $graphic;
        $this->power = $power;
    }


    public function index()
    {
        return view ('/maquinas');

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
