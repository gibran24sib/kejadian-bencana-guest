<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kejadian_Bencana ;
use App\Models\Posko_Bencana;


class KejadianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $data['dataKejadian'] = Kejadian_Bencana::findOrFail($id);
        $data['dataPosko'] = Posko_Bencana::where('kejadian_id', $id)->get();
        return view('guest.kejadian', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
