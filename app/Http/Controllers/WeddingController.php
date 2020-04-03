<?php

namespace App\Http\Controllers;

use App\Wedding;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class WeddingController extends Controller
{
    public function isiPaket()
    {
        return view('isi-paket');
    }
    public function detailPaket()
    {
        return view('detail-paket');
    }
    public function daftarPaket()
    {
        return view('daftar-paket');
    }
    public function blog()
    {
        return view('blog');
    }
    public function photograpy()
    {
        return view('photograpy');
    }
    public function event()
    {
        return view('event');
    }    
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form-paket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|unique:weddings|max:255',
            'alamat_rumah' => 'required',
            'tanggal_resepsi' => 'required|date',
            'jumlah_undangan' => 'required|numeric',
            'tempat_acara' => 'required',
        ]);
        $wedding = Wedding::Create($validatedData);

        return view('oke')->with('Success, Selamat Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
