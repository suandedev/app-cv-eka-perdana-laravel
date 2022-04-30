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
     * @param  \App\Http\Requests\StorePanenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePanenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Panen  $panen
     * @return \Illuminate\Http\Response
     */
    public function show(Panen $panen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panen  $panen
     * @return \Illuminate\Http\Response
     */
    public function edit(Panen $panen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePanenRequest  $request
     * @param  \App\Models\Panen  $panen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePanenRequest $request, Panen $panen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panen  $panen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panen $panen)
    {
        //
    }
}
