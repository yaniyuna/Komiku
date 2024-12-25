<?php

namespace App\Http\Controllers;

use App\Models\Komik;
use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Pesanan';
        $pesanans = Pesanan::with(['komik', 'transaksi'])->get();

        return view('admin2.dataPesanan', compact('title', 'pesanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Input Pesanan";
        $komiks = Komik::all();
        $transaksis = Transaksi::all();

        return view('admin2.tambahPesanan', compact('title', 'komiks', 'transaksis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute harus diisi.',
            'numeric' => 'Kolom :attribute harus berupa angka.',
        ];

        $validasi = $request->validate([
            'id_komik' => 'required|exists:komiks,id_komik',
            'id_transaksi' => 'required|exists:transaksis,id_transaksi',
            'kuantitas' => 'required|numeric|min:1',
            'subtotal' => 'required|numeric|min:0',
        ], $messages);

        try {
            $komik = Komik::findOrFail($request->id_komik);

            if ($komik->stok < $request->kuantitas) {
                return redirect()->back()->with('error', 'Stok tidak mencukupi.');
            }

            $komik->stok -= $request->kuantitas;
            $komik->save();

            Pesanan::create($validasi);

            return redirect()->route('admin2.index')->with('success', 'Data pesanan berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pesanan = Pesanan::find($id);
        $title = $pesanan ? "Edit Data $pesanan->id_pesanan" : 'Edit Data';

        if (!$pesanan) {
            return redirect()->route('admin2.index')->with('error', 'Data tidak ditemukan.');
        }

        $komiks = Komik::all();
        $transaksis = Transaksi::all();

        return view('admin2.tambahPesanan', compact('title', 'pesanan', 'komiks', 'transaksis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Kolom :attribute harus diisi.',
            'numeric' => 'Kolom :attribute harus berupa angka.',
        ];

        $validasi = $request->validate([
            'id_komik' => 'required|exists:komiks,id_komik',
            'id_transaksi' => 'required|exists:transaksis,id_transaksi',
            'kuantitas' => 'required|numeric|min:1',
            'subtotal' => 'required|numeric|min:0',
        ], $messages);

        try {
            $pesanan = Pesanan::findOrFail($id);
            $komik = Komik::findOrFail($request->id_komik);

            $oldQuantity = $pesanan->kuantitas;
            $newQuantity = $request->kuantitas;

            if ($oldQuantity != $newQuantity) {
                $komik->stok += $oldQuantity;

                if ($komik->stok < $newQuantity) {
                    return redirect()->back()->with('error', 'Stok tidak mencukupi.');
                }

                $komik->stok -= $newQuantity;
                $komik->save();
            }

            $pesanan->update($validasi);

            return redirect()->route('admin2.index')->with('success', 'Data pesanan berhasil diperbarui!');
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
            $pesanan = Pesanan::findOrFail($id);
            $pesanan->delete();

            return redirect()->route('admin2.index')->with('success', 'Data pesanan berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function komik($id)
    {
        $komik = Komik::with('pesanans')->find($id);

        if (!$komik) {
            return redirect()->back()->with('error', 'Komik tidak ditemukan.');
        }

        $title = 'Komik ' . $komik->id_komik;
        $pesanans = $komik->pesanans;

        return view('admin2.dataPesanan', compact('title', 'pesanans', 'komik'));
    }

    public function transaksi($id)
    {
        $transaksi = Transaksi::with('pesanans')->find($id);

        if (!$transaksi) {
            return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
        }

        $title = 'Transaksi ' . $transaksi->id_transaksi;
        $pesanans = $transaksi->pesanans;

        return view('admin2.dataPesanan', compact('title', 'pesanans', 'transaksi'));
    }
}
