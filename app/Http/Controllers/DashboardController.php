<?php

namespace App\Http\Controllers;
use App\Models\Konten;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $konten = Konten::all();
        return view('admin.dashboard', ['konten' => $konten]);
    }

    public function show($id)
    {
        $data = Konten::find($id);
        return view('admin.konten_edit', ['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        $update = Konten::where('id', $id)
                        ->update([
                            'title' => $request->title,
                            'description' => $request->description
                        ]);

        if (!$update) {
            return redirect('/admin/konten/edit/'.$id)->with('fail', 'Perubahan data gagal');
        }

        return redirect('/admin/dashboard')->with('message', 'Perubahan data berhasil');
    }


}
