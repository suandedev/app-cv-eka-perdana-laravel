<?php

namespace App\Http\Controllers;

use App\Models\RiceKind;
use App\Http\Requests\StoreRiceKindRequest;
use App\Http\Requests\UpdateRiceKindRequest;

class RiceKindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rice_kinds = collect(RiceKind::all())->sortDesc()->values()->all();
        return view('components.rice_kind.index-rice-kind', compact('rice_kinds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('components.rice_kind.create-rice-kind');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRiceKindRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRiceKindRequest $request)
    {
        //
        $request->validate([
           'rice_kind' => 'required|string|max:225',
        ]);
        RiceKind::create([
            'rice_kind' => $request['rice_kind'],
        ]);
        return redirect()->route('kind.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RiceKind  $riceKind
     * @return \Illuminate\Http\Response
     */
    public function show(RiceKind $riceKind)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiceKind  $riceKind
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $rice_kind = RiceKind::find($id);
        return view('components.rice_kind.edit-rice-kind', compact('rice_kind'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRiceKindRequest  $request
     * @param  \App\Models\RiceKind  $riceKind
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRiceKindRequest $request, RiceKind $riceKind)
    {
        //
        $request->validate([
            'rice_kind' => 'required|string|max:225',
        ]);
        $riceKind->rice_kind = $request['rice_kind'];
        $riceKind->save();
        return redirect()->route('kind.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiceKind  $riceKind
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $riceKind = RiceKind::find($id);
        $riceKind->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
