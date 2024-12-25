<?php

namespace App\Http\Controllers;

use App\Models\Komik;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class KomikuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Komiku';
        $komiks = Komik::all(); // Tidak perlu mendeklarasikan objek baru
        return view('admin.dataKomiku', compact('title', 'komiks'));
    }

    public function index3()
    {
        $title = 'Data Transaksi';
        $transaksis = Transaksi::all();
        return view('admin.dataTransaksi', compact('title', 'transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Input Komik";
        return view('admin.tambahKomik', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute harus lengkap',
            'numeric' => 'Kolom :attribute harus angka',
            'file' => 'Perhatikan format dan ukuran file',
        ];

        $validasi = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
            'thn_terbit' => 'required|numeric',
            'sinopsis' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'feature_img' => 'nullable|mimes:png,jpg|max:1024',
        ], $messages);

        try {
            if ($request->hasFile('feature_img') && $request->file('feature_img')->isValid()) {
                $fileName = time() . '_' . $request->file('feature_img')->getClientOriginalName();
                $path = $request->file('feature_img')->storeAs('uploads/komiks', $fileName);
                $validasi['feature_img'] = $path; // Add file path to the validated data
            }

            Komik::create($validasi);

            return redirect()->route('admin.index')->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Data";
        $komik = Komik::findOrFail($id); // Gunakan findOrFail untuk otomatis menangani data tidak ditemukan
        return view('admin.tambahKomik', compact('title', 'komik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Kolom :attribute harus lengkap',
            'numeric' => 'Kolom :attribute harus angka',
            'file' => 'Perhatikan format dan ukuran file',
        ];

        $validasi = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
            'thn_terbit' => 'required|numeric',
            'sinopsis' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'feature_img' => 'nullable|mimes:png,jpg|max:1024',
        ], $messages);

        try {
            $komik = Komik::findOrFail($id); // Cari data komik, otomatis 404 jika tidak ditemukan
            
            if ($request->hasFile('feature_img') && $request->file('feature_img')->isValid()) {
                $fileName = time() . '_' . $request->file('feature_img')->getClientOriginalName();
                $path = $request->file('feature_img')->storeAs('uploads/komiks', $fileName);
                $validasi['feature_img'] = $path;
            }

            $komik->update($validasi); // Update data komik yang sudah ada

            return redirect()->route('admin.index')->with('success', 'Data berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $komik = Komik::findOrFail($id); // Gunakan findOrFail untuk otomatis 404 jika tidak ditemukan
            $komik->delete(); // Menghapus data komik

            return redirect()->route('admin.index')->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
