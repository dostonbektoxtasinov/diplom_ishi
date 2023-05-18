<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoshmaqolRequest;
use App\Models\Maqol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        if ($request->has('rasm')) {

            $name = $request->file('rasm')->getClientOriginalName();
            $path = $request->file('rasm')->storeAs('Maqol', $name);
        }

        $post = Maqol::create([
            'rasm' => $path ?? null,
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
        if ($request->hasFile('rasm')) {

            if (isset($BoshMaqol->rasm)) {
                Storage::delete($BoshMaqol->rasm);
                $BoshMaqol->rasm = $request->file('rasm')->store('Maqol');
            }

            $name = $request->file('rasm')->getClientOriginalName();
            $path = $request->file('rasm')->storeAs('Maqol', $name);
        }

        $BoshMaqol->update([
            'rasm' => $path ?? $BoshMaqol->rasm,
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
