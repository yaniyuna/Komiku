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
        $title = 'Data Komiku';
        $komiks = new Komik;
        $komiks = Komik::all();
        // $komiks = Komik::paginate(2);
        // $komik=collect($komik);
        return view('admin.dataKomiku', compact('title', 'komiks'));
    }

    public function index3()
    {

        $title = 'Data Transaksi';
        $transaksis = Transaksi::all();
        // $transaksis = Transaksi::paginate(2);
        
        return view('admin.dataTransaksi', compact('title', 'transaksis'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Input Komik";
        $komiks = Komik::all();
        return view('admin.tambahKomik', compact('title', 'komiks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'required' => 'Kolom : Atribut harus lengkap',
            'numeric' => 'Kolom : Atribut harus angka',
            'file' => 'Perhatikan format dan ukuran file', 
        ];

        $validasi=$request->validate([
            'judul'=> 'required',
            'penulis' => 'required',
            'kategori' => 'required',
            'thn_terbit' => 'required',
            'sinopsis' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'feature_img' => 'required|mimes:png,jpg|max:1024'
        ], $messages);
        try{
            $fileName = time().$request->file('feature_img')->getClientOriginalName();
            $path = $request->file('feature_img')->storeAs('uploads/komiks', $fileName);
            $validasi['feature_img'] = $path;
            $response=Komik::create($validasi);
            return redirect()->route('admin.index')->with('success', 'Data berhasil disimpan!');
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
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
        $title="Edit Data";
        // $komiks=Komik::all();
        $komiks=Komik::where('id_komik', $id)->first();
        if($komiks != NULL){
            $title="Edit Data".$komiks->id_komik;
            return view('admin.tambahKomik', compact('title', 'komiks'));
        }
        else{
            return view('admin.dataKomiku', compact('title', 'komiks'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $messages = [
            'required' => 'Kolom : Atribut harus lengkap',
            'numeric' => 'Kolom : Atribut harus angka',
            'file' => 'Perhatikan format dan ukuran file', 
        ];

        $validasi=$request->validate([
            'judul'=> 'required',
            'penulis' => 'required',
            'kategori' => 'required',
            'thn_terbit' => 'required',
            'sinopsis' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'feature_img' => 'mimes:png,jpg|max:1024'
            // 'feature_img' => ''
        ]);
        try{
            if($request->file('feature_img')){
                $fileName = time().$request->file('feature_img')->getClientOriginalName();
                $path = $request->file('feature_img')->storeAs('uploads/komiks', $fileName);
                $validasi['feature_img'] = $path;
            }
            $response=Komik::where('id_komik', $id)->update($validasi);
            return redirect()->route('admin.index')->with('success', 'Data berhasil disimpan!');
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{
            $komiks=Komik::find($id);
            if($komiks != NULL){
                $komiks->delete();
                return redirect('admin');
            }
            else{
                echo "Data tidak ditemukan";
            } 
        }
        catch(\Exception $e){
            $e->getMessage();
        }

    }
}
