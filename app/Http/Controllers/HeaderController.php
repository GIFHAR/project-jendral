<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function home()
    {
        return view('LandingPageRevisi');
    }

    // public function aboutus()
    // {
    //     return view('aboutusPage');
    // }

    public function services()
    {
        return view('services/seafreight');
    }

    ////////////////////////////

    public function konsultasibisnis()
    {
        return view('konsultasibisnisPage');
    }

    public function jasapembelian()
    {
        return view('jasapembelianPage');
    }

    public function jasawarehouse()
    {
        return view('jasawarehousePage');
    }

    public function jasapengiriman()
    {
        return view('jasapengirimanPage');
    }

    /////////////////////////////////

    public function pricing()
    {
        return view('pricingPage');
    }

    public function tracking()
    {
        return view('trackingPage');
    }

    public function contact()
    {
        return view('contactPage');
    }


    // public function pengirimanlaut()
    // {
    //     return view('pengirimanlautPage');
    // }

    // public function pengirimanudara()
    // {
    //     return view('pengirimanudaraPage');
    // }
}
