<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class AdminPortfolioController extends Controller
{
    public function index()
    {
        $data = Portfolio::all();
        // dd($data);
        return view('admin/portfolio', compact('data'));
    }

    public function add()
    {
        return view('admin/portfolio_add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('file')) {
            $ext = $request->file('file')->extension(); 
            // if (preg_match('/^(?!jpg$|png$|jpeg$)[^.]+$/', $ext)) {
            //     return Redirect::back()->with('fail', 'Portfolio image file can only be jpg or png');
            // }
            
            $new_file = time().'.'.$ext;
            $request->file('file')->move(public_path('images/portfolio'), $new_file);  
            
            Portfolio::create([
                'path' => $new_file,
                'title' => $request->title,
                'description' => $request->description
            ]);
            
            return redirect('/admin/portfolio')->with('message', 'Portfolio berhasil ditambahkan');
            
        } else {
            dd('err');
        }

    }

    public function edit($id)
    {
        $data = Portfolio::find($id);
        return view('admin.portfolio_edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Portfolio::where('id', $id)
                    ->update([
                        'title' => $request->title,
                        'description' => $request->description
                    ]);

        if ($request->hasFile('file')) {
            $ext = $request->file('file')->extension();            
            $new_file = time().'.'.$ext;
            $request->file('file')->move(public_path('images/portfolio'), $new_file);

            Portfolio::where('id', $id)
                    ->update([
                        'path' => $new_file
                    ]);
        }

        return redirect('/admin/portfolio')->with('message', 'Portfolio berhasil diperbarui');
    }

    public function delete($id)
    {
        Portfolio::destroy($id);
        return redirect('/admin/portfolio')->with('message', 'Portfolio berhasil dihapus');
    }

}
