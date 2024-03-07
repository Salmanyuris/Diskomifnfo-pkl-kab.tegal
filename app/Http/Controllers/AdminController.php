<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $database = DB::table('mahasiswa')->get();

        return view('admin.penerimaan', compact('database'));
    }

    public function apply($id){
        DB::table('mahasiswa')->where('id', $id)->update([
            'status' => 'Diterima'
        ]);

        return redirect()->route('penerimaan');
    }

    public function reject($id){
        DB::table('mahasiswa')->where('id', $id)->update([
            'status' => 'Ditolak'
        ]);

        return redirect()->route('penerimaan');
    }

    public function cv($id){
        $cv = DB::table('mahasiswa')->where('id', $id)->value('cv');
        return response()->file('CV/'.$cv);
    }
}
