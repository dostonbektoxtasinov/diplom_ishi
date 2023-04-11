<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoshmaqolRequest;
use App\Models\Maqol;
use Illuminate\Http\Request;

class MaqolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Maqol::all();

        return view('Admin.admin.BoshMaqol.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.admin.BoshMaqol.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BoshmaqolRequest $request)
    {
        $post = Maqol::create([
            'maqollar' => $request->maqol,
        ]);

        return redirect()->route('BoshMaqol.index');
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
    public function edit(Maqol $BoshMaqol)
    {
        return view('Admin.admin.BoshMaqol.edit')->with(['BoshMaqol' => $BoshMaqol]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BoshmaqolRequest $request, Maqol $BoshMaqol)
    {
        $BoshMaqol->update([
            'maqollar' => $request->maqol,
        ]);

        return redirect()->route('BoshMaqol.index', ['BoshMaqol',  $BoshMaqol->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maqol $BoshMaqol)
    {   
        $BoshMaqol->delete();

        return redirect()->route('BoshMaqol.index');
    }
}
