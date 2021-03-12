<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin/pengguna', compact('user'));
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect('/admin/pengguna')->with('message', 'Pengguna berhasil dihapus');
    }

}
