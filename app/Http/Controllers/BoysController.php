<?php

namespace App\Http\Controllers;

use App\Models\Boys;
use Illuminate\Http\Request;

class BoysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        return view('Admin.admin.yigitlar.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.admin.yigitlar.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required',
            'fish' => 'required',
            'short_content' => 'required',
            'content' => 'required',
        ]);

        $post = Boys::create([
            'photo' => $request->photo,
            'fish' => $request->fish,
            'short_content' => $request->short_content,
            'content' => $request->content
        ]);

        return redirect()->route('Admin.admin.yigitlar.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
