<?php

namespace App\Http\Controllers;

use App\Models\m_user;
use Illuminate\Http\Request;

class m_userController extends Controller
{
    public function index()
    {
        $useri = m_user::all();
        return view('m_user.index', compact('useri'))->with('i');
    }

    // public function create()
    // {
    //     return view('kategori.create');
    // }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'kodeKategori' => 'required|unique:m_kategori,kategori_kode'
    //     ], [
    //         'kodeKategori.unique' => 'Kode Kategori sudah ada.'
    //     ]);

    //     m_user::create([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori
    //     ]);
    //     return redirect('/kategori')->with('succes', 'Kategori berhasil ditambahkan');
    // }

    // public function edit($id)
    // {
    //     $kategori = m_user::find($id);
    //     return view('kategori.edit', compact('kategori'));
    // }

    // public function update($id, Request $request)
    // {
    //     $kategori = m_user::find($id);
    //     if (!$kategori) {
    //         return redirect()->back()->with('error', 'Kategori tidak ditemukan.');
    //     }

    //     $kategori->kategori_kode = $request->kodeKategori;
    //     $kategori->kategori_nama = $request->namaKategori;
    //     $kategori->save();

    //     return redirect('/kategori')->with('success', 'Kategori berhasil diperbarui.');
    // }

    // public function delete($id)
    // {
    //     $kategori = m_user::find($id);
    //     if (!$kategori) {
    //         return redirect()->back()->with('error', 'Kategori tidak ditemukan.');
    //     }

    //     $kategori->delete();

    //     return redirect('/kategori')->with('success', 'Kategori berhasil dihapus.');
    // }
}
