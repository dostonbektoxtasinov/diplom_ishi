<?php

namespace App\Http\Controllers;

use App\Http\Requests\XonalarRequest;
use App\Models\Xonalar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class XonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Xonalar::all();

        return view('Admin.admin.Xonalar.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.admin.Xonalar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(XonalarRequest $request)
    {
        
        // $path = $request->file('rasm')->store('Xonalar');


        if ($request->has('rasm')) {
            
            $name = $request->file('rasm')->getClientOriginalName();
            $path = $request->file('rasm')->storeAs('Xonalar', $name);
        }
        
       
        
        $post = Xonalar ::create([
            'hona_nomi' => $request->hona_nomi, 
            'rasm' => $path ?? null
        ]);

        return redirect()->route('Xonalar.index');
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
    public function edit(Xonalar $Xonalar)
    {
        // dd($xona);
        return view('Admin.admin.Xonalar.edit')->with(['Xonalar' => $Xonalar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(XonalarRequest $request, Xonalar $Xonalar)
    {
        if ($request->hasFile('rasm')) {

            if (isset($Xonalar->rasm)) {
                Storage::delete($Xonalar->rasm);   
                $Xonalar->rasm = $request->file('rasm')->store('Xonalar');
            }
            
                $name = $request->file('rasm')->getClientOriginalName();
                $path = $request->file('rasm')->storeAs('Xonalar', $name);
            
        }   
        
        $Xonalar->update([
            'hona_nomi' => $request->hona_nomi,
            'rasm' => $path ?? $Xonalar->rasm,
        ]);

        return redirect()->route('Xonalar.index', ['Xonalar' => $Xonalar->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Xonalar $Xonalar)
    {
        $Xonalar->delete();
        Storage::delete($Xonalar->rasm);
        
        return redirect()->route('Xonalar.index');
    }
}
