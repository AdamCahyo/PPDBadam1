<?php

namespace App\Http\Controllers;

use App\Models\Adamcahyonugroho;
use Illuminate\Http\Request;

class AdamcahyonugrohoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adamcahyonugroho = Adamcahyonugroho::latest()->paginate(5);

    return view('adamcahyonugroho.index',compact('adamcahyonugroho'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adamcahyonugroho.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
    'nama' => 'required',
    'jk' => 'required',
    'alamat' => 'required',
    'agama' => 'required',
    'asal_sekolah' => 'required',
    'minat_jurusan' => 'required',
    ]);

    $siswa=Adamcahyonugroho::create($request->all());

    return redirect()->route('print', $siswa->id)->with('success','Selamat, Anda sudah terdaftar di SMK Merdeka Belajar.');
    }
public function print($id){
        $siswa=Adamcahyonugroho::find($id);
        return view('adamcahyonugroho.print', compact('siswa'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adamcahyonugroho  $adamcahyonugroho
     * @return \Illuminate\Http\Response
     */
    public function show(Adamcahyonugroho $adamcahyonugroho)
    {
        return view('adamcahyonugroho.show',compact('adamcahyonugroho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adamcahyonugroho  $adamcahyonugroho
     * @return \Illuminate\Http\Response
     */
    public function edit(Adamcahyonugroho $adamcahyonugroho)
    {
         return view('adamcahyonugroho.edit',compact('adamcahyonugroho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adamcahyonugroho  $adamcahyonugroho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adamcahyonugroho $adamcahyonugroho)
    {
        $request->validate([
    'nama' => 'required',
    'jk' => 'required',
    'alamat' => 'required',
    'agama' => 'required',
    'asal_sekolah' => 'required',
    'minat_jurusan' => 'required',
    ]);

    $adamcahyonugroho->update($request->all());

    return redirect()->route('adamcahyonugroho.index')
        ->with('success','“Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adamcahyonugroho  $adamcahyonugroho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adamcahyonugroho $adamcahyonugroho)
    {
         $adamcahyonugroho->delete();

    return redirect()->route('adamcahyonugroho.index')
        ->with('success','Adamcahyonugroho deleted successfully');
    }
}
