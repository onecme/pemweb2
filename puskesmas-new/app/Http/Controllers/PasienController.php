<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;


class PasienController extends Controller
{
    public function index(){
        $list_pasien = Pasien::with('kelurahan')->get();
        return view('admin.pasien.index', compact('list_pasien'));
    }
}
