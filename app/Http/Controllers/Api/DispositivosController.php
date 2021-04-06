<?php

namespace App\Http\Controllers\Api;
use App\Models\Dispositivo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DispositivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Dispositivo::all();
        //return $dispositivos;
        return view('dashboard',compact('devices'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $devices = Dispositivo::all();
        $device=Dispositivo::findOrFail($id);
        return view ("showdispositivo", compact("device", "devices"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $devices = Dispositivo::all();
        $device=Dispositivo::findOrFail($id);
        $device->update([
            'Estado' => request('Estado'),
        ]);
        return view ("showdispositivo", compact("device", "devices"));
    }
    public function tabla()
    {
        $devices = Dispositivo::all();
        return view ("Dispositivos", compact("devices"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ON(Dispositivo $device, $id )
    {
        // $devices = Dispositivo::all();
        // $device=Dispositivo::findOrFail($id);
        $device->update([
            'Estado' => 'ON',
        ]);
        return view ("showdispositivo", compact("device", "devices"));


    }
    public function OFF(Dispositivo $device, $id )
    {
        // $devices = Dispositivo::all();
        // $device=Dispositivo::findOrFail($id);
        $device->update([
            'Estado' => 'OFF',
        ]);
        return view ("showdispositivo", compact("device", "devices"));

    }
    public function update(Dispositivo $device, Request $request, $id)
    {
        $device=Dispositivo::findOrFail($id);
        $request->validate([
            'Estado' => 'required',
            'user_id' => 'required',
        ]);
        $device->update([
            'Estado' => request('Estado'),
            'user_id' => request('user_id'),
        ]);
        return redirect()->back();

    }

}

