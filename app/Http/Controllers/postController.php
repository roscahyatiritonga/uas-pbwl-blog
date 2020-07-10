<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = post::all();
        return view('post.index', compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rows = post::all();
        return view('post.create', compact("rows"));
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
                'post_date' => 'required',
                'post_slug' => 'required',
                'post_title' => 'required',
                'post_text' => 'required',
                'category_id' => 'required'
            ],
            [
                'post_date.required'=>'Wajib diisi',
                'post_slug.required'=>'Wajib diisi',
                'post_title.required'=>'Wajib diisi',
                'post_text.required'=>'Wajib diisi',
                'category_id.required'=>'Wajib diisi'
            ]);

        post::create([
            'post_date' => $request->post_date,
            'post_slug' => $request->post_slug,
            'post_title' => $request->post_title,
            'post_text' => $request->post_text,
            'category_id' => $request->category_id
        ]);

        return redirect('post');
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
        $row = post::findOrFail($id);
        return view('post.edit', compact('row'));
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
                'post_date' => 'required',
                'post_slug' => 'required',
                'post_title' => 'required',
                'post_text' => 'required',
                'category_id' => 'required'
            ],
            [
                'post_date.required'=>'Wajib diisi',
                'post_slug.required'=>'Wajib diisi',
                'post_title.required'=>'Wajib diisi',
                'post_text.required'=>'Wajib diisi',
                'category_id.required'=>'Wajib diisi'
            ]);
        $row=post::findOrFail($id);
        $row->update([
            'post_date' => $request->post_date,
            'post_slug' => $request->post_slug,
            'post_title' => $request->post_title,
            'post_text' => $request->post_text,
            'category_id' => $request->category_id
        ]);

        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=post::findOrFail($id);
        $row->delete();

        return redirect('post');
    }
}
