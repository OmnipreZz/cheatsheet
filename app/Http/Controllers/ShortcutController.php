<?php

namespace App\Http\Controllers;

use App\Shortcut;
use Illuminate\Http\Request;


class ShortcutController extends Controller
{
    

    public function index()
    {
        $shortcuts = Shortcut::orderBy('name', 'asc')->get();
        return view('shortcut.index', compact('shortcuts'));
    }

    public function admin()
    {
        $shortcuts = Shortcut::orderBy('name', 'asc')->get();
        return view('shortcut.admin', compact('shortcuts'));
    }


    public function create()
    {
        return view('shortcut.create');
    }

    
    public function store(Request $request)
    {
        $shortcut = Shortcut::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return redirect()->route('shortcut_admin');
    }

    
    public function show(Shortcut $shortcut)
    {
        //
    }

    
    public function edit($id)
    {
        $shortcut = Shortcut::findOrFail($id);
        return view('shortcut.edit', compact('shortcut'));
    }

    
    public function update(Request $request, $id)
    {
        $shortcut = Shortcut::findOrFail($id);
        $shortcut->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return redirect()->route('shortcut_admin');
    }

    
    public function destroy($id)
    {
        Shortcut::find($id)->delete();
        return redirect()->route('shortcut_admin');
    }
}
