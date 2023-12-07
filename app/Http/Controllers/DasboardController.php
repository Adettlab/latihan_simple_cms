<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use App\Models\category;

class DasboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = berita::get();
        return view('dasboard.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            "dasboard.post.create",
            [
                "categories" => Category::all(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'judul' => 'required|max:255',
            'penulis' => 'required',
            'slug'=>'required',
            'gambar'=>'image|file|max:1024',
            'id_categories'=>'required'
        ]);

        $validatedata['id_users']=auth()->user()->id;

        $validatedata['isiPost'] = strip_tags($request->isiPost);
        berita::create($validatedata);

        return redirect('/dasboard')->with('success', 'berhasil menambah post!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(berita $berita)
    {
        return view(

            "dasboard.post.edit",
            [   "berita"=> $berita,
                "categories" => Category::all(),
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, berita $berita)
    {
        $berita->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'slug'=>$request->slug,
            'id_categories'=> $request->id_categories,
            'isiPost'=> strip_tags($request->isiPost) 
        ]);
        return redirect('/dasboard')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(berita $berita)
    {
        $berita->delete(); 
        return redirect('/dasboard/post')->with('success', 'berhasil menghapus'); 
    }
}
