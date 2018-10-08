<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shortcutcategory;

class ShortcutCategoryController extends Controller
{
    public function admin()
    {
        $categories = Shortcutcategory::orderBy('name', 'asc')->get();
        return view('shortcutCat.admin', compact('categories'));
    }


    public function create()
    {
        return view('shortcutCat.create');
    }

    
    public function store(Request $request)
    {
        $category = Shortcutcategory::create([
            'name' => $request->input('name')
        ]);

        return redirect()->route('shortcutCat_admin');
    }
    
    public function edit($id)
    {
        $category = Shortcutcategory::findOrFail($id);
        return view('shortcutCat.edit', compact('category'));
    }

    
    public function update(Request $request, $id)
    {
        $category = Shortcutcategory::findOrFail($id);
        $category->update([
            'name' => $request->input('name')
        ]);

        return redirect()->route('shortcutCat_admin');
    }

    
    public function destroy($id)
    {
        Shortcutcategory::find($id)->delete();
        return redirect()->route('shortcutCat_admin');
    }
}
