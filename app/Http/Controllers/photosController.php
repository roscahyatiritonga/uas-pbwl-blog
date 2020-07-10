<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photos;

class photosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = photos::all();
        return view('photo.index', compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rows = photos::all();
        return view('photo.create', compact('rows'));
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
                'photo_date' => 'required',
                'photo_title' => 'required',
                'photo_text' => 'required',
                'photo_upload' => 'required',
                'post_id' => 'required'
            ],
            [
                'photo_date.required'=>'Wajib diisi',
                'photo_title.required'=>'Wajib diisi',
                'photo_text.required'=>'Wajib diisi',
                'photo_upload.required'=>'Wajib diisi',
                'post_id.required'=>'Wajib diisi'
            ]);

        photos::create([
            'photo_date' => $request->photo_date,
            'photo_title' => $request->photo_title,
            'photo_text' => $request->photo_text,
            'photo_upload' => $request->photo_upload,
            'post_id' => $request->post_id
        ]);

        return redirect('photo');
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
        $row = photos::findOrFail($id);
        return view('photo.edit', compact('row'));
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
                'photo_date' => 'required',
                'photo_title' => 'required',
                'photo_text' => 'required',
                'photo_upload' => 'required',
                'post_id' => 'required'
            ],
            [
                'photo_date.required'=>'Wajib diisi',
                'photo_title.required'=>'Wajib diisi',
                'photo_text.required'=>'Wajib diisi',
                'photo_upload.required'=>'Wajib diisi',
                'post_id.required'=>'Wajib diisi'
            ]);
        $row=photos::findOrFail($id);
        $row->update([
            'photo_date' => $request->photo_date,
            'photo_title' => $request->photo_title,
            'photo_text' => $request->photo_text,
            'photo_upload' => $request->photo_upload,
            'post_id' => $request->post_id
        ]);

        return redirect('photo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=photos::findOrFail($id);
        $row->delete();

        return redirect('photo');
    }
}
