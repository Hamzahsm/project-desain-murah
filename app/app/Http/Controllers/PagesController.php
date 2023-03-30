<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // 
    function jasaKolamKoi() {
        return view('pages.jasa-kolam-koi', [
            'title' => 'Jasa Kolam Koi Tulungagung - Terbaik'
        ]);
    }

    function desainRumahMewah() {
        return view('pages.desain-rumah-mewah', [
            'title' => 'Desain Rumah Mewah Terbaik - Amanah dan Profesional'
        ]);
    }

    function desainRumahMinimalis() {
        return view('pages.desain-rumah-minimalis', [
            'title' => 'Desain Rumah Minimalis Terbaik - Amanah dan Profesional'
        ]);
    }

    function desainRumahModern() {
        return view('pages.desain-rumah-modern', [
            'title' => 'Desain Rumah Modern Terbaik - Amanah dan Profesional'
        ]);
    }

    function desainGedung() {
        return view('pages.desain-gedung', [
            'title' => 'Desain Rumah Gedung Kantor - Amanah dan Profesional'
        ]);
    }

    function desainMall() {
        return view('pages.desain-mall', [
            'title' => 'Desain Mall - Amanah dan Profesional'
        ]);
    }

    function customDesain() {
        return view('pages.custom-desain', [
            'title' => 'Layanan Jasa Custom Desain - Amanah dan Profesional'
        ]);
    }

    function tentangKami() {
        return view('pages.tentang-kami', [
            'title' => 'Tentang Kami - Profil Desain Murah ID'
        ]);
    } 

    function hargaDesain() {
        return view('pages.harga-desain', [
            'title' => 'Harga Desain - Desain Murah ID'
        ]);
    } 

    function kontakKami() {
        return view('pages.kontak-kami', [
            'title' => 'Kontak Kami - Desain Murah ID'
        ]);
    } 

    function portofolioDesain() {
        return view('pages.portofolio-desain', [
            'title' => 'Portofolio Desain - Desain Murah ID'
        ]);
    } 












}
