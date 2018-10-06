<?php

namespace App\Http\Controllers;

use App\Shortcut;
use Illuminate\Http\Request;


class ShortcutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortcuts = Shortcut::orderBy('name', 'asc')->get();
        return view('shortcut.index', compact('shortcuts'));
    }

    public function admin()
    {
        $shortcuts = Shortcut::orderBy('id', 'asc')->get();
        return view('shortcut.admin', compact('shortcuts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shortcut.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shortcut = Shortcut::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return redirect()->route('shortcut_admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shortcut  $shortcut
     * @return \Illuminate\Http\Response
     */
    public function show(Shortcut $shortcut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shortcut  $shortcut
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shortcut = Shortcut::findOrFail($id);
        return view('shortcut.edit', compact('shortcut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shortcut  $shortcut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shortcut = Shortcut::findOrFail($id);
        $shortcut->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return redirect()->route('shortcut_admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shortcut  $shortcut
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shortcut::find($id)->delete();
        return redirect()->route('shortcut_admin');
    }
}
