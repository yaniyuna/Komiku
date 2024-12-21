<?php

namespace App\Http\Controllers;

use App\Models\Komik;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class KomikuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $komik=[(object)[
        //     'id_komik' =>1,
        //     'judul'=> 'Naruto',
        //     'kategori'=> 'Action',
        //     'stok' =>'20'
        // ]];
        $title = 'Data Komiku';
        $komiks = new Komik;
        $komiks = Komik::all();
        $komiks = Komik::paginate(2);
        // $komik=collect($komik);
        return view('BackPage.dataKomiku', compact('title', 'komiks'));
    }

    public function index2()
    {

        $title = 'Data User';
        $users = User::all();
        // $users = User::paginate(2);
        
        return view('BackPage.dataUser', compact('title', 'users' ));
    }

    public function index3()
    {

        $title = 'Data Transaksi';
        $transaksis = Transaksi::all();
        // $transaksis = Transaksi::paginate(2);
        
        return view('BackPage.dataTransaksi', compact('title', 'transaksis'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Input Komik";
        $komiks = Komik::all();
        return view('BackPage.tambahKomik', compact('title', 'komiks'));
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
