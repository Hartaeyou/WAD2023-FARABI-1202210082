<?php

namespace App\Http\Controllers;

use App\Models\showroom_mobil;
use App\Http\Requests\Storeshowroom_mobilRequest;
use App\Http\Requests\Updateshowroom_mobilRequest;

class ShowroomMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return(view);
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
    
    public function store(Storeshowroom_mobilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(showroom_mobil $showroom_mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(showroom_mobil $showroom_mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateshowroom_mobilRequest $request, showroom_mobil $showroom_mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(showroom_mobil $showroom_mobil)
    {
        //
    }
}
