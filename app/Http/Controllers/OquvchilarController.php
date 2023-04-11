<?php

namespace App\Http\Controllers;

use App\Http\Requests\OquvchilarRequest;
use App\Models\Oquvchilar;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OquvchilarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Oquvchilar::all();

        return view('Admin.admin.oquvchilar.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.admin.oquvchilar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OquvchilarRequest $request)
    {

        // $path =$request->file('photo')->store('Oquvchilar');

        
        if ($request->has('rasm')) {

            $name = $request->file('rasm')->getClientOriginalName();
            $path = $request->file('rasm')->storeAs('Oquvchilar', $name);
        }
        Oquvchilar::create([
            'rasm' => $path ?? null,
            'ism_fam' => $request->ism_fam,
            'sinfi' => $request->sinfi,
            'jinsi' => $request->jinsi,
        ]);

        return redirect()->route('oquvchilar.index');
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
    public function edit(Oquvchilar $oquvchilar)
    {
        return view('Admin.admin.oquvchilar.edit', ['oquvchilar' => $oquvchilar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OquvchilarRequest $request, Oquvchilar $oquvchilar)
    {
        if ($request->hasFile('rasm')) {

            if (isset($oquvchilar->rasm)) {
                Storage::delete($oquvchilar->rasm);
                $oquvchilar->rasm = $request->file('rasm')->store('Oquvchilar');
            }

            $name = $request->file('rasm')->getClientOriginalName();
            $path = $request->file('rasm')->storeAs('Oquvchilar', $name);

        }

        $oquvchilar->update([
            'rasm' => $path ?? $oquvchilar->rasm,
            'ism_fam' => $request->ism_fam,
            'sinfi' => $request->sinfi,
            'jinsi' => $request->jinsi,
        ]);

        return redirect()->route('oquvchilar.index', ['oquvchilar' => $oquvchilar->id]);
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oquvchilar $oquvchilar)
    {
        $oquvchilar->delete();       

        return redirect()->route('oquvchilar.index');
    }
}
