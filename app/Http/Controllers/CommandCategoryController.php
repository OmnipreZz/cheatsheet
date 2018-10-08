<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commandcategory;

class CommandCategoryController extends Controller
{
    public function admin()
    {
        $categories = Commandcategory::orderBy('name', 'asc')->get();
        return view('commandCat.admin', compact('categories'));
    }


    public function create()
    {
        return view('commandCat.create');
    }

    
    public function store(Request $request)
    {
        $category = Commandcategory::create([
            'name' => $request->input('name')
        ]);

        return redirect()->route('commandCat_admin');
    }
    
    public function edit($id)
    {
        $category = Commandcategory::findOrFail($id);
        return view('commandCat.edit', compact('category'));
    }

    
    public function update(Request $request, $id)
    {
        $category = Commandcategory::findOrFail($id);
        $category->update([
            'name' => $request->input('name')
        ]);

        return redirect()->route('commandCat_admin');
    }

    
    public function destroy($id)
    {
        Commandcategory::find($id)->delete();
        return redirect()->route('commandCat_admin');
    }
}
