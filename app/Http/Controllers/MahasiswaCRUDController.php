<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Http\Requests;

class MahasiswaCRUDController extends Controller
{
        public function index(Request $request)
    {
        $mahasiswa = Mahasiswa::orderBy('id', 'DESC')->paginate(5);
        //compact digunakan untuk mentransfer data ke resources/views

        //view digunakan untuk menghubungkan ke tampilan pada resources/views
        return view('mahasiswa.index', compact('mahasiswa'))
              ->with('i', ($request->input('page', 1) - 1) * 5);

    }

    public function create(){
        //view digunakan untuk menghubungkan ke tampilan pada resources/views
        return view('mahasiswa.create');

    }

    public function store(Request $request)
    {
        //validate untuk memvalidasi suatu field yang akan di gunakan untuk create atau update
        $this->validate($request, [
            'nama'    => 'required',
            'alamat'  => 'required',
            'jurusan' => 'required',
        ]);

        Mahasiswa::create($request->all());
        //route digunakan untuk menghubungkan ke folder routes/web
        return redirect()->route('mahasiswacrud.index')
              ->with('success', 'mahasiswa created successfully');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        //view digunakan untuk menghubungkan ke tampilan pada resources/views
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {
        //Fungsi find digunakan untuk mencari data berdasarkan id atau lainnya

        $mahasiswa = Mahasiswa::find($id);
        //compact digunakan untuk mentransfer data ke resources/views
        //view digunakan untuk menghubungkan ke tampilan pada resources/views

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

        public function update(Request $request, $id)
    {
        //validate untuk memvalidasi suatu field yang akan di gunakan untuk create atau update

        $this->validate($request, [
            'nama'    => 'required',
            'alamat'  => 'required',
            'jurusan' => 'required',
            ]);
        //Fungsi find digunakan untuk mencari data berdasarkan id atau lainnya

        Mahasiswa::find($id)->update($request->all());
        //route digunakan untuk menghubungkan ke folder routes/web

        return redirect()->route('mahasiswacrud.index')
            ->with('success', 'mahasiswa updated successfully');
    }

        public function destroy($id)
    {
        //Fungsi find digunakan untuk mencari data berdasarkan id atau lainnya
        Mahasiswa::find($id)->delete();
        //route digunakan untuk menghubungkan ke folder routes/web

        return redirect()->route('mahasiswacrud.index')
            ->with('success', 'mahasiswa deleted successfully');
    }







}
