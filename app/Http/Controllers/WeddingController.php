<?php

namespace App\Http\Controllers;


use File;
use App\Toko;
use App\Admin;
use App\Wedding;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class WeddingController extends Controller
{
    public function logout()
    {
        $out = Toko::logout();
        return redirect(route('index'))->with($out);
    }
    public function tokoForm()
    {
        return view('admin.create');
    }
    public function createToko(Request $request)
    {
        $this->validate($request, [
            'nama_toko' => 'required|string|max:255',
            'logo_toko' => 'required|image|mimes:png,jpeg,jpg',
            'lokasi' => 'required|string',
            'jumlah_paket' => 'required|numeric',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('logo_toko')) {
            $file = $request->file('logo_toko');
            $filename = time() . Str::slug($request->nama_toko) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/toko', $filename);

            $data = Toko::create([
                'nama_toko' => $request->nama_toko,
                'logo_toko' => $filename,
                'lokasi' => $request->lokasi,
                'jumlah_paket' => $request->jumlah_paket,
                'deskripsi' => $request->deskripsi,
                'status' => true
            ]);
            return redirect(route('home'))->with(['success' => 'Selamat data toko berhasil ditambah']);
        }
        // $admin = Toko::Create($data);

        // return redirect(route('admin.home'))->with('success', 'Selamat data toko berhasil di tambah');   
    }

    public function login()
    {
        return view('admin.login');
    }

    public function admin()
    {
        $toko = Toko::all();
        if (request()->q != '') {
            $toko = $toko->where('nama_toko', 'LIKE', '%' . request()->q . '%');
        }
        
        return view('admin.home', compact('toko'));
    }

    public function register()
    {
        return view('admin.register');
    }

    public function storeLogin(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required|exists:admins,nama',
            'password' => 'required|exists:admins,password'
        ]);
        if (Admin::where('nama', $request->nama)->where('password', $request->password)->exists())
        {
            return redirect(route('home'));
        }
        return view('admin.login')->with('error', 'Username/password anda salah');
    }

    public function storeRegister(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
            
        ]);
        $admin = Admin::Create($data);

        return redirect(route('login'))->with('success', 'Selamat Berhasil Registrasi, Silahkan Login');
    }

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
        $status = Toko::exists('status');
        $toko = Toko::all();
        return view('index', compact('toko', 'status'));
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
    public function edit(Toko $toko)
    {
        return view('admin.edit', compact('toko'));
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
        $validasi = $request->validate([
            'nama_toko' => 'required|string',
            'logo_toko' => 'required|image|mimes:png,jpg,jpeg',
            'lokasi' => 'required|string',
            'jumlah_paket' => 'required|numeric',
            'deskripsi' => 'required|string'
        ]);
        Toko::whereId($id)->update($validasi);

        return redirect(route('home'))->with('success', 'Data berhasil diperbaharui');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $pengantar = Toko::findOrFail($id);
       $pengantar->delete();

       return redirect()->back()->with('success', 'Data Berhasil Dihapus');
   }
}
