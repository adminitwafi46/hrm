<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
//model karyawan
use App\Models\karyawan;

class karyawanController extends Controller
{
    //index_banin
    public function index_banin(): Response
    {
        //get all karyawans
        $karyawans = karyawan::all();
        return Inertia::render('Karyawan/IndexBanin', [
            'karyawans' => $karyawans,
        ]);
    }
}
