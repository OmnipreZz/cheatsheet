<?php

namespace App\Http\Controllers;

use App\Command;
use App\Commandcategory;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function index()
    {
        $commands = Command::with('category')->orderBy('name', 'asc')->get();
        $categories = Commandcategory::all();
        return view('command.index', compact('commands', 'categories'));
    }

    public function admin()
    {
        $commands = Command::with('category')->orderBy('name', 'asc')->get();
        $categories = Commandcategory::all();
        return view('command.admin', compact('commands', 'categories'));
    }


    public function create()
    {
        $categories = Commandcategory::all();
        return view('command.create', compact('categories'));
    }

    
    public function store(Request $request)
    {
        $command = Command::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category')
        ]);

        return redirect()->route('command_admin');
    }

    
    public function show(Command $command)
    {
        //
    }

    
    public function edit($id)
    {
        $command = Command::findOrFail($id);
        $categories = Commandcategory::all();
        $hisCategory = $command->category;
        return view('command.edit', compact('command', 'categories', 'hisCategory'));
    }

    
    public function update(Request $request, $id)
    {
        $command = Command::findOrFail($id);
        $command->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category')
        ]);

        return redirect()->route('command_admin');
    }

    
    public function destroy($id)
    {
        Command::find($id)->delete();
        return redirect()->route('command_admin');
    }
}
