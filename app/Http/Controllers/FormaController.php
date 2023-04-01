<?php

namespace App\Http\Controllers;

use App\Models\Forma;
use Illuminate\Http\Request;

class FormaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Forma::all();

        return view('Admin.admin.Forma.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.admin.Forma.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if ($request->has('rasm')) {
        //     $name = $request->file('rasm')->getClientOriginalName();
        // $path = $request->file('rasm')->storeAs('Forma', $name);
        // }
            $path = $request->file('rasm')->storeAs('Forma');

        $request->validate([
            'ism' => 'required|max:80',
            'rasm' => 'required',
        ]);

        $post = Forma::create([
            'ism' => $request->ism, 
            'rasm' => $path

        ]);

        return redirect()->route('Forma.index');
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
