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
        $categories = Shortcutcategory::orderBy('name')->get();
        $hisCategory = 1;
        return view('shortcut.index', compact('shortcuts', 'categories', 'hisCategory'));
    }

    public function indexByCat(Request $request)
    {
        $categories = Shortcutcategory::orderBy('name')->get();
        $shortcuts = Shortcut::with('category')->where('category_id', $request->input('category') )->orderBy('name')->get();
        $hisCategory = $request->input('category');
        return view('shortcut.index', compact('shortcuts', 'categories', 'hisCategory'));
    }


    public function admin()
    {
        $shortcuts = Shortcut::with('category')->where('category_id', 1)->orderBy('name')->get();
        $categories = Shortcutcategory::orderBy('name')->get();
        $hisCategory = 1;
        return view('shortcut.admin', compact('shortcuts', 'categories', 'hisCategory'));
    }

    public function adminByCat(Request $request)
    {
        $categories = Shortcutcategory::orderBy('name')->get();
        $shortcuts = Shortcut::with('category')->where('category_id', $request->input('category') )->orderBy('name')->get();
        $hisCategory = $request->input('category');
        return view('shortcut.admin', compact('shortcuts', 'categories', 'hisCategory'));
    }


    public function create()
    {
        $categories = Shortcutcategory::orderBy('name')->get();
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
        $categories = Shortcutcategory::orderBy('name')->get();
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
