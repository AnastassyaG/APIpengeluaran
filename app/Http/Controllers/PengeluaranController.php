<?php

namespace App\Http\Controllers;

use App\Models\pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function indexs()
    {
        $tampils = pengeluaran::orderBy('id','DESC')->get();
        return view('tampil',compact('tampils'));
    }
    public function index()
    {
        $tampils = pengeluaran::orderBy('id','DESC')->get();
        $response = [
            'message' => "Show data terbaru!",
            'data' => $tampils
        ];
        return response()->json($response,201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $pengeluaran = new pengeluaran;
        $pengeluaran->pengeluaran = $request->pengeluaran;
        $pengeluaran->total = $request->total;
        $pengeluaran->keterangan = $request->keterangan;
        $pengeluaran->save();

        return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, pengeluaran $pengeluaran, $id)
    {
        //

        $pengeluaran->pengeluaran = $request->pengeluaran;
        $pengeluaran->total = $request->total;
        $pengeluaran->keterangan = $request->keterangan;

        $pengeluaran = pengeluaran::find($id);
        $pengeluaran->pengeluaran = $request->pengeluaran;
        $pengeluaran->total = $request->total;
        $pengeluaran->keterangan = $request->keterangan;
        $pengeluaran->save();
        return redirect()->route('pengeluaran.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $barang = pengeluaran::find($id);
        $barang->delete();

        return redirect()->route('pengeluaran.index');
    }
    public function add(){
        return view ('add');
    }
    public function edit($id){
        $edit = pengeluaran::findorFail($id);
        return view('edit', compact('edit'));
    }
}

