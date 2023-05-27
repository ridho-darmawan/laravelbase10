<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Requests\BarangPostRequest;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BarangPostRequest  $request, Barang $barang)
    {        
        $data = $request->all(); 

        Barang::create($data);
        Alert::toast('Berhasil Menambah Data', 'success');
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

  
    public function update(Request $request, Barang $barang)
    {   

        // var_dump($request->all());die;

        $barang->update($request->all());
        Alert::toast('Berhasil Mengubah Data', 'success');
        return redirect()->route('barang.index');
    }

  
    public function destroy(Barang $barang)
    {
        $barang->delete();
        Alert::toast('Berhasil Menghapus Data', 'success');
        return redirect()->route('barang.index');
    }
}
