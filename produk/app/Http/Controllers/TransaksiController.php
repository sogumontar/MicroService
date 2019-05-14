<?php

namespace App\Http\Controllers;

use App\transaksi;
use App\produk;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;   
        $t=transaksi::find($id);

        // return view();
        return view('lihat',compact('t'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request,$id)
    {   
        $rr=produk::find($id);

        transaksi::create([
            'nama'=>$rr['nama'],
            'harga'=>$rr['harga'],
            'deskripsi'=>$rr['deksripsi'],
            'id_bookers'=>Auth::user()->id,
            'jumlah'=>request('jumlah'),
            'status'=>0,
            'id_produk'=>$id

        ]);

       
        return view('transaction',compact('t'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        //
    }
    public function test(){
        
         $t=produk::find(Auth::user()->id);
        return view('transaction',compact('t'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        //
    }
}
