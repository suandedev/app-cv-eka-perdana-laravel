<?php

namespace App\Http\Controllers;

use App\Models\Panen;
use App\Http\Requests\StorePanenRequest;
use App\Http\Requests\UpdatePanenRequest;
use App\Models\Petani;
use App\Models\RiceKind;

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
        $panens = collect(Panen::all())->sortDesc()->values()->all();
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
        $petanis = Petani::all();
        $rice_kinds = RiceKind::all();
        return view('components.panen.create-panen', compact('petanis', 'rice_kinds'));
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
            'petani_id' => 'numeric',
            'rice_kind' => 'numeric',
            'weight' => 'required|numeric',
        ]);
        Panen::create([
            'petani_id' => $request['petani_id'],
            'rice_kind_id' => $request['rice_kind'],
            'weight' => $request['weight'],
        ]);
        return redirect()->back();
//        return redirect()->route('panen.index')->with('success', 'Data berhasil ditambahkan');
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
        $petanis = Petani::all();
        $rice_kinds = RiceKind::all();
        return view('components.panen.edit-panen', compact('panen', 'petanis', 'rice_kinds'));
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
