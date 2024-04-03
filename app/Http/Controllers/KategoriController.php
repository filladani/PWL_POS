<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {   
        $validated = $request->validate([
            'kodeKategori' => 'required|unique:m_kategori,kategori_kode'
        ], [
            'kodeKategori.unique' => 'Kode Kategori sudah ada.'
        ]);
        
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori
        ]);
        return redirect('/kategori')->with('succes', 'Kategori berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update($id, Request $request)
    {
        $kategori = KategoriModel::find($id);
        if (!$kategori) {
            return redirect()->back()->with('error', 'Kategori tidak ditemukan.');
        }

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;
        $kategori->save();

        return redirect('/kategori')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function delete($id)
    {
        $kategori = KategoriModel::find($id);
    if (!$kategori) {
        return redirect()->back()->with('error', 'Kategori tidak ditemukan.');
    }
    
    $kategori->delete();
    
    return redirect('/kategori')->with('success', 'Kategori berhasil dihapus.');
    }

    // public function index()
    // {
    //     // $data = [
    //     'kategori_kode' => 'SNK',
    //     'kategori_nama' => 'Snack/Makanan Ringan',
    //     'created_at' => now()
    // ];
    // DB::table('m_kategori')->insert($data);
    // return 'Insert data baru berhasil';

    // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Cemilan']);
    // return 'Update data berhasil. Jumlah data yang di update : ' . $row . ' baris';

    // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    // return 'Delete data berhasil. Jumlah data yang di hapus : ' . $row . ' baris';

    //     $data = DB::select('select * from m_kategori');
    //     return view('kategori', ['data' => $data]);
    // }
}
