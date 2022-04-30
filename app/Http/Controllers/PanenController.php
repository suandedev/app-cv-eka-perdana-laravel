<?php

namespace App\Http\Controllers;

use App\Models\Panen;
use App\Http\Requests\StorePanenRequest;
use App\Http\Requests\UpdatePanenRequest;

class PanenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $panens = Panen::all();
        return view('components.panen.index-panen', compact('panens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('components.panen.create-panen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePanenRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePanenRequest $request)
    {
        //
        $request->validate([
            'weight' => 'required|numeric',
        ]);
        Panen::create([
            'petani_id' => 1,
            'weight' => $request['weight'],
        ]);
        return redirect()->route('panen.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Panen $panen
     * @return \Illuminate\Http\Response
     */
    public function show(Panen $panen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Panen $panen
     * @return \Illuminate\Http\Response
     */
    public function edit(Panen $panen)
    {
        //
        return view('components.panen.edit-panen', compact('panen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePanenRequest $request
     * @param \App\Models\Panen $panen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePanenRequest $request, Panen $panen)
    {
        //
        $request->validate([
            'weight' => 'required|numeric',
        ]);
        $panen->weight = $request['weight'];
        $panen->save();
        return redirect()->route('panen.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Panen $panen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panen $panen)
    {
        //
        $panen->delete();
        return redirect()->route('panen.index')->with('success', 'Data berhasil dihapus');
    }
}
