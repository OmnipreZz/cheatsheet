<?php

namespace App\Http\Controllers;

use App\Shortcut;
use App\Shortcutcategory;
use Illuminate\Http\Request;


class ShortcutController extends Controller
{
    

    public function index()
    {
        $shortcuts = Shortcut::with('category')->where('category_id', 1)->orderBy('name')->get();
        $categories = Shortcutcategory::all();
        return view('shortcut.index', compact('shortcuts', 'categories'));
    }

    public function indexByCat(Request $request)
    {
        $categories = Shortcutcategory::all();
        $shortcuts = Shortcut::with('category')->where('category_id', $request->input('category') )->orderBy('name')->get();
        return view('shortcut.index', compact('shortcuts', 'categories'));
    }


    public function admin()
    {
        $shortcuts = Shortcut::with('category')->where('category_id', 1)->orderBy('name')->get();
        $categories = Shortcutcategory::all();
        return view('shortcut.admin', compact('shortcuts', 'categories'));
    }

    public function adminByCat(Request $request)
    {
        $categories = Shortcutcategory::all();
        $shortcuts = Shortcut::with('category')->where('category_id', $request->input('category') )->orderBy('name')->get();
        return view('shortcut.admin', compact('shortcuts', 'categories'));
    }


    public function create()
    {
        $categories = Shortcutcategory::all();
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
        $categories = Shortcutcategory::all();
        $hisCategory = $shortcut->category;
        return view('shortcut.edit', compact('shortcut', 'categories', 'hisCategory'));
    }

    
    public function update(Request $request, $id)
    {
        $shortcut = Shortcut::findOrFail($id);
        $shortcut->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category')
        ]);

        return redirect()->route('shortcut_admin');
    }

    
    public function destroy($id)
    {
        Shortcut::find($id)->delete();
        return redirect()->route('shortcut_admin');
    }
}
