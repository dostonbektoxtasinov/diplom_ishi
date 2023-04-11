<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormaRequest;
use App\Models\Forma;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(FormaRequest $request)
    {
        if ($request->has('rasm')) {
           
            $name = $request->file('rasm')->getClientOriginalName();
            $path = $request->file('rasm')->storeAs('Forma', $name);
        }

       
        
        $post = Forma::create([
            'ism' => $request->ism, 
            'rasm' => $path ?? null
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
    public function edit(Forma $Forma)
    {
        return view('Admin.admin.Forma.edit')->with(['Forma' => $Forma]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormaRequest $request, Forma $Forma)
    {

        if ($request->hasFile('rasm')) {

            if (isset($Forma->rasm)) {
                Storage::delete($Forma->rasm);
                $Forma->rasm = $request->file('rasm')->store('Forma');
            }
            
            $name = $request->file('rasm')->getClientOriginalName();
            $path = $request->file('rasm')->storeAs('Forma', $name);
        }


        $Forma->update([
            'ism' => $request->ism, 
            'rasm' => $path ?? $Forma->rasm,
        ]);

     

        return redirect()->route('Forma.index', ['Forma',  $Forma->id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forma $Forma)
    {
        $Forma->update([
            'umumiy' => 1
        ]);

        return redirect()->route('Forma.index');
    }
}
