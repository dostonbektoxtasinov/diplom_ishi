<?php

namespace App\Http\Controllers;

use App\Http\Requests\OqituvchilarRequest;
use App\Models\Oqituvchilar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OqituvchilarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Oqituvchilar::all();

        return view('Admin.admin.oqituvchi.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.admin.Oqituvchi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OqituvchilarRequest $request)
    {
        if ($request->has('rasm')) {
           
            $name = $request->file('rasm')->getClientOriginalName();
            $path = $request->file('rasm')->storeAs('Oqituvchilar', $name);
        }

        // $path =$request->file('photo')->store('Oqituvchilar');

        // dd($path); 
        
        $post = Oqituvchilar::create([
            'rasm' => $path,
            'ism' => $request->ism, 
            'fan' => $request->fan
        ]);
        

        return redirect()->route('oqituvchi.index');
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
    public function edit(Oqituvchilar $oqituvchi)
    {
        return view('Admin.admin.Oqituvchi.edit')->with(['oqituvchi' => $oqituvchi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OqituvchilarRequest $request, Oqituvchilar $oqituvchi)
    {
        if ($request->hasFile('rasm')) {

            if (isset($oqituvchi->rasm)) {
                Storage::delete($oqituvchi->rasm);
             
                // storage papkadan ham ochirish qodi
                $oqituvchi->rasm = $request->file('rasm')->store('Oqituvchilar');
                // storage papkadan ham ochirish qodi
            }
            
            $name = $request->file('rasm')->getClientOriginalName();
            $path = $request->file('rasm')->storeAs('Oqituvchilar', $name);
        }

        

        $oqituvchi->update([
            'rasm' => $path ?? $oqituvchi->rasm,
            'ism' => $request->ism, 
            'fan' => $request->fan, 
        ]);

     

        return redirect()->route('oqituvchi.index', ['Oqituvchilar',  $oqituvchi->id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oqituvchilar $oqituvchi)
    {
        // storage papkadan ham ochirish qodi
        Storage::delete($oqituvchi->rasm);
        // storage papkadan ham ochirish qodi
        
        $oqituvchi->delete();

        return redirect()->route('oqituvchi.index');
    }
}
