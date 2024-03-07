<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use File;

class RegisterController extends Controller
{

    public function index(){
        $database = DB::table('mahasiswa')->get();

        return view('announcment', compact('database'));
    }

    public function store(Request $request){

        $request->validate([
            'cv' => 'mimes:pdf'
        ]);

        $cv = $request->cv;
        $namaCv = $cv->getClientOriginalName();

        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
            'kelamin' => $request->kelamin,
            'universitas' => $request->universitas,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_berakhir' => $request->tgl_berakhir,
            'cv' => $namaCv
        ]);
 
        $cv->move('CV/', $namaCv);
        

        return redirect()->route('announcment.index');
    }
}
