<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload.upload');
    }

    public function prosesFileUpload(Request $request)
    {
        // dump($request->berkas);
        // dump($request->berkas);
        // return "Pemprosesan file upload disini";

        if ($request->hasFile('berkas')) {
            echo "path(): " . $request->berkas->path();
            echo "<br>";
            echo "extension(): " . $request->berkas->extension();
            echo "<br>";
            echo "getClientOriginalExtension(): " . $request->berkas->getClientOriginalExtension();
            echo "<br>";
            echo "getMimeType(): " . $request->berkas->getMimeType();
            echo "<br>";
            echo "getClientOriginalName(): " . $request->berkas->getClientOriginalName();
            echo "<br>";
            echo "getSize(): " . $request->berkas->getSize();
        } else {
            echo "Tidak ada berkas yang diupload";
        }

        $request->validate([
            'berkas'=>'required|file|image|max:500',
            // 'berkas'=>'required',
        ]);
        // echo $request->berkas->getClientOriginalName()."lolos validasi";
        // $path = $request->berkas->store('uploads');
        $extfile=$request->berkas->getClientOriginalName();
        // $path = $request->berkas->storeAs('uploads', 'berkas');
        $namaFile = 'web' . time() . "." . $extfile;

        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\", "//", $path);
        echo "Variabel path berisi:$path <br>";

        $pathBaru=asset('gambar/' .$namaFile);
        echo "Proses upload berhasil,  file berada di : $path";
        echo "<br>";
        echo "Tampilkan link : <a href = '$pathBaru'>$pathBaru</a>";
    }


    public function tugasFileUpload()
    {
        return view('file-upload.tugas-upload');
    }

    public function tugasProsesFileUpload(REquest $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:500',
            'nama_file' => 'required|string',
        ]);

        if ($request->hasFile('berkas')) {
            $extfile = $request->berkas->getClientOriginalExtension();
            $namaFile = $request->input('nama_file') . '.' . $extfile;
            $path = $request->berkas->move('gambar', $namaFile);
            $path = str_replace("\\", "//", $path);
            $pathBaru = asset('gambar/' . $namaFile);
            echo "Proses upload berhasil, file berada di: $path <br>";
            echo "Tampilkan gambar: <br>";
            echo "<img src='$pathBaru' alt='Uploaded Image'>";
        } else {
            echo "Tidak ada berkas yang diupload";
        }
    }

}
