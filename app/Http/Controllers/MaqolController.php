<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MaqolController extends Controller
{

    public function admin()
    {
        return view('Admin.layouts.main');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::all();
        // dd($posts);
        return view('Admin.admin.BoshMaqol.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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