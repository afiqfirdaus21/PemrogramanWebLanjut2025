<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LevelController extends Controller
{
    public function index(){
        //Awal
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?,?,?)', ['cus', 'pelanggan', now()]);
        // return 'Insert data baru berhasil';


        //Setelah Modifikasi
        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'cus']);
        // return 'Update data berhasil.Jumlah data yang diupdate: ' .$row. 'baris';

        //Modifikasi 2
        // $row = DB::delete('delete from m_level where level_kode = ?', ['cus']);
        // return 'Delete data berhasil. jumlah data yang dihapus: ' .$row. 'baris';

        //Modifikasi 3
        $data = DB::select('select * from m_level');
        return view ('level', ['data' => $data]);
    }
}