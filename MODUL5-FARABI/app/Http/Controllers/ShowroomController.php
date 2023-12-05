<?php

namespace App\Http\Controllers;

use App\Models\showroom_mobil;
use App\Http\Requests\Storeshowroom_mobilRequest;
use App\Http\Requests\Updateshowroom_mobilRequest;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showroom = showroom_mobil::all();
        return view('showroom.index', compact('showroom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('showroom.create'); //
    }

    public function store(Request $request){
        $data = $request->all();
        showroom_mobil::create([
            "nama_mobil" => $data["name"],
            "brand_mobil" => $data["brand"],
            "warna_mobil" => $data["warna"],
            "tipe_mobil" => $data["tipe"],
            "harga_mobil" => $data["harga"]

        ]);
        return redirect(route(route('showroom_mobil.index')));
        }


}
