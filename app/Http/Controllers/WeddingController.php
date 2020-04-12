<?php

namespace App\Http\Controllers;

use App\Wedding;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class WeddingController extends Controller
{
    public function detailHera()
    {
        return view('detail-hera');
    }

    public function detailKeane()
    {
        return view('detail-keane');
    }

    public function detailHis()
    {
        return view('detail-his');
    }

    public function detailAgung()
    {
        return view('detail-agung');
    }

    public function detailPangeran()
    {
        return view('detail-pangeran');
    }

    public function detailKhalifa()
    {
        return view('detail-khalifa');
    }

    public function paketKhalifa()
    {
        return view('paket-khalifa');
    }
    public function paketPangeran()
    {
        return view('paket-pangeran');
    }
    public function paketAgung()
    {
        return view('paket-agung');
    }
    public function paketKeane()
    {
        return view('paket-keane');
    }
    public function paketHera()
    {
        return view('paket-hera');
    }
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
    public function paketHis()
    {
        return view('paket-his');
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
            'kendala' => 'required|string:max255'
        ]);
        $wedding = Wedding::Create($validatedData);

        return view('layout-success')->with('Success, Selamat Data Berhasil Ditambah');
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
