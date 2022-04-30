<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use App\Http\Requests\StorePetaniRequest;
use App\Http\Requests\UpdatePetaniRequest;

class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['petanis'] = Petani::all();
        return view('components.petani.index-petani', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('components.petani.create-petani');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetaniRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetaniRequest $request)
    {
        //
        $request->validate([
            'petani_name' => 'required|max:200|min:3',
        ]);
        Petani::create([
            'petani_name' => $request['petani_name'],
        ]);
        return redirect()->route('petani.index')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function show(Petani $petani)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function edit(Petani $petani)
    {
        //
        return view('components.petani.edit-petani', compact('petani'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetaniRequest  $request
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetaniRequest $request, Petani $petani)
    {
        //
        $request->validate([
            'petani_name' => 'required|max:200|min:3',
        ]);
        $petani->petani_name = $request['petani_name'];
        $petani->save();
        return redirect()->route('petani.index')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petani $petani)
    {
        //
        $petani->delete();
        return redirect()->route('petani.index')->with('success', 'Data berhasil dihapus');
    }
}
