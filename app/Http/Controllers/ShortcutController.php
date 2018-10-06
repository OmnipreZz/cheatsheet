<?php

namespace App\Http\Controllers;

use App\Shortcut;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ShortcutController extends Controller
{
    

    public function index()
    {
        $shortcuts = Shortcut::orderBy('name', 'asc')->get();
        return view('shortcut.index', compact('shortcuts'));
    }

    public function admin()
    {
        $shortcuts = Shortcut::with('category')->orderBy('name', 'asc')->get();
        $categories = Category::all();
        return view('shortcut.admin', compact('shortcuts', 'categories'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('shortcut.create', compact('categories'));
    }

    
    public function store(Request $request)
    {
        $shortcut = Shortcut::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category')
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
