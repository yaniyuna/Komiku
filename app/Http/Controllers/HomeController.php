<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('frontpage.landingpage', ['title' => 'Landing Page']);
    }

    function page2(){
        return view('frontpage.komikuProduk', ['title' => 'Komiku Produk']);
    }

    function page3(){
        return view('frontpage.detailKomiku', ['title' => 'Detail Komiku']);
    }

    function page4(){
        return view('frontpage.keranjang', ['title' => 'Keranjang']);
    }

    function page5(){
        return view('frontpage.formTransaksi', ['title' => 'Transaksi']);
    }

}
