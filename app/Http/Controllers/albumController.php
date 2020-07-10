<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\album;

class albumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = album::all();
        return view('album.index', compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rows = album::all();
        return view('album.create', compact('rows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'album_name' => 'required',
                'album_text' => 'required',
                'photo_id' => 'required'
            ],
            [
                'album_name.required'=>'NAMA wajib diisi',
                'album_text.required'=>'Wajib diisi',
                'photo_id.required'=>'Wajib diisi'
            ]);

        album::create([
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'photo_id' => $request->photo_id
        ]);

        return redirect('album');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = album::findOrFail($id);
        return view('album.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
                'album_name' => 'required',
                'album_text' => 'required',
                'photo_id' => 'required'
            ],
            [
                'album_name.required'=>'NAMA wajib diisi',
                'album_text.required'=>'Wajib diisi',
                'photo_id.required'=>'Wajib diisi'
            ]);
        $row=album::findOrFail($id);
        $row->update([
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'photo_id' => $request->photo_id
        ]);

        return redirect('album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=album::findOrFail($id);
        $row->delete();

        return redirect('album');
    }
}
