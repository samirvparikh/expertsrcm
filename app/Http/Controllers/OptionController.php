<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    public function index()
    {
        // $options = Option::all();
        $options = Option::orderBy('category')->get();
        $categories = Option::select('category')->distinct()->pluck('category');
        return view('options.index', compact('options', 'categories'));
    }

    public function create()
    {
        return view('options.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'value' => 'required'
        ]);

        Option::create($request->all());

        return redirect()->route('options.index')->with('success', 'Option added successfully');
    }

    public function edit(Option $option)
    {
        return view('options.edit', compact('option'));
    }

    public function update(Request $request, Option $option)
    {
        $request->validate([
            'category' => 'required',
            'value' => 'required'
        ]);

        $option->update($request->all());

        return redirect()->route('options.index')->with('success', 'Option updated successfully');
    }

    public function destroy1(Option $option)
    {
        $option->delete();
        return redirect()->route('options.index')->with('success', 'Option deleted successfully');
    }

    public function delete($id)
    {
        // dd($id);
        $option = Option::find($id);

        if (!$option) {
            return redirect()->route('options.index')->with('error', 'Option not found.');
        }

        $option->delete();

        return redirect()->route('options.index')->with('success', 'Option deleted successfully!');
    }
}
