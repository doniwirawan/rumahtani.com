<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $artikel = DB::table('articles')->paginate(4);
        // $artikelfull = DB::table('artikel')->get();
        
        return view('beranda',['artikel' => $artikel ]);
        // return view('beranda',['artikefull' => $artikelfull ]);
    }
    public function blog()
    {
        $artikel = DB::table('articles')->paginate(4);
        
        return view('blog',['artikel' => $artikel ]);
    }
    public function konten($id)
        {

            // mengambil data pegawai berdasarkan id yang dipilih
            $artikel = DB::table('articles')->where('id',$id)->get();
            // passing data pegawai yang didapat ke view edit.blade.php
            return view('konten',['artikel' => $artikel]);
            
        
        }
}
