<?php

namespace App\Http\Controllers;

use App\Models\DosenModel;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Mendapatkan semua data dosens
        $dosens = DosenModel::all();

        // Mengirim data dosens ke view
        return view('profile_dosen', compact('dosens'));
}
}