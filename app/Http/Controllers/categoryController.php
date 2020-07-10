<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = category::all();
        return view('category.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rows = category::all();
        return view('category.create', compact('rows'));
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
                'category_name' => 'required',
                'category_text' => 'required'
            ],
            [
                'category_name.required'=>'NAMA wajib diisi',
                'category_text.required'=>'Wajib diisi'
            ]);

        category::create([
            'category_name' => $request->category_name,
            'category_text' => $request->category_text
        ]);

        return redirect('category');
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
        $row = category::findOrFail($id);
        return view('category.edit', compact('row'));
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
                'category_name' => 'required',
                'category_text' => 'required'
            ],
            [
                'category_name.required'=>'NAMA wajib diisi',
                'category_text.required'=>'Wajib diisi'
            ]);
        $row=category::findOrFail($id);
        $row->update([
            'category_name' => $request->category_name,
            'category_text' => $request->category_text
        ]);

        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=category::findOrFail($id);
        $row->delete();

        return redirect('category');
    }
}
