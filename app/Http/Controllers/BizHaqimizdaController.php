<?php

namespace App\Http\Controllers;

use App\Http\Requests\BizHaqimizdaRequest;
use App\Models\BizHaqimizda;
use Illuminate\Http\Request;

class BizHaqimizdaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = BizHaqimizda::all();

        return view('Admin.admin.biz_haqimizda.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.admin.biz_haqimizda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BizHaqimizdaRequest $request)
    {
        $post = BizHaqimizda::create([
            'dars_ertalab'  => $request->ertalab,
            'dars_kech'     => $request->kech,
            'lokatsiya'     => $request->lokatsiya,
            'nomer'         => $request->nomer,
            'email'         => $request->email,
        ]);

        return redirect()->route('biz_haqimizda.index');
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
    public function edit(BizHaqimizda $biz_haqimizda)
    {
        // $biz_haqimizda = Biz_haqimizda::find($post);
        // dd($biz_haqimizda);
        return view('Admin.admin.biz_haqimizda.edit')->with(['biz_haqimizda' => $biz_haqimizda]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BizHaqimizdaRequest $request, BizHaqimizda $bizHaqimizda)
    {
        $bizHaqimizda->update([
            'dars_ertalab'  => $request->dars_ertalab,
            'dars_kech'     => $request->dars_kech,
            'lokatsiya'     => $request->lokatsiya,
            'nomer'         => $request->nomer,
            'email'         => $request->email,
        ]);

        return redirect()->route('biz_haqimizda.index', ['biz_haqimizda' => $bizHaqimizda->id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BizHaqimizda $bizHaqimizda)
    {
        $bizHaqimizda->delete();

        return redirect()->route('biz_haqimizda.index');
    }
}
