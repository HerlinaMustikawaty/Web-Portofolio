<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfilRequest;
use App\Http\Requests\UpdateProfilRequest;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        Profil::create([
            'nama' => $request->nama,
            'pekerjaan_utama' => $request->pekerjaan_utama,
            'pekerjaan_sampingan' => $request->pekerjaan_sampingan,
            'tentang_saya' => $request->tentang_saya,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'alamat' => $request->alamat,
            'pesan_singkat' => $request->pesan_singkat
        ]);

        return redirect('/dashboard_admin')->with('success', 'Profil Berhasil di Edit!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.edit', [
            'profils' => Profil::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilRequest  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Profil::where('id', $id)->update([
            'nama' => $request->nama,
            'pekerjaan_utama' => $request->pekerjaan_utama,
            'pekerjaan_sampingan' => $request->pekerjaan_sampingan,
            'tentang_saya' => $request->tentang_saya,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'alamat' => $request->alamat,
            'pesan_singkat' => $request->pesan_singkat
        ]);

        return redirect('/dashboard_admin')->with('success', 'Profil berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
