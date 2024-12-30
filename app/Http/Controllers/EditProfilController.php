<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfilController extends Controller
{
    public function showEditProfilForm()
    {
        return view('edit-profil'); // Mengembalikan view registrasi.blade.php
    }
}