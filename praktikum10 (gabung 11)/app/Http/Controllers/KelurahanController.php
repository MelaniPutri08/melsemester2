<?php

namespace App\Http\Controllers;

use App\Models\kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kelurahan = kelurahan::all();
        return view('kelurahan.index', ['list_kelurahan' => $list_kelurahan]);
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
    public function show(kelurahan $kelurahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelurahan $kelurahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelurahan $kelurahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelurahan $kelurahan)
    {
        //
    }
}
