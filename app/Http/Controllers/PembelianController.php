<?php

namespace App\Http\Controllers;

use App\Models\Panen;
use App\Models\Pembelian;
use App\Http\Requests\StorePembelianRequest;
use App\Http\Requests\UpdatePembelianRequest;
use App\Models\Petani;
use App\Models\RiceKind;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
        $petanis = collect(Petani::all())->sortDesc()->values()->all();
        return view('components.index-pembelian', compact('petanis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('components.create-pembelian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePembelianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePembelianRequest $request)
    {
        //
        $request->validate([
            'petani_name' => 'required|string|max:255',
            'rice_kind' => 'required|string|max:100',
        ]);
        Petani::create([
            'petani_name' => $request['petani_name'],
            'rice_kind' => $request['rice_kind'],
            'total' => 0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $petani = Petani::find($id);
        $panens = Petani::find($id)->panens;
        $kind = RiceKind::find($id)->kinds;
        return view('components.pembelian.show-pembelian', compact( 'kind','panens', 'petani'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePembelianRequest  $request
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePembelianRequest $request, Pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelian $pembelian)
    {
        //
    }

    public function cetak_pdf($id = null)
    {
        $panen = Panen::all();
        $pdf = PDF::loadview('components.report.petani-pdf', ['panen'=>$panen]);
        return $pdf->download('laporan-pegawai-pdf.pdf');
    }
}
