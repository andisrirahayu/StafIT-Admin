<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditPasswordController extends Controller
{
    public function showEditPasswordForm()
    {
        return view('edit-password'); // Mengembalikan view registrasi.blade.php
    }
}