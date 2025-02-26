<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $dishes = Menu::all();
        return view('menu.index', compact('dishes'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dish_name' => 'required|string|max:100',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|string|max:50',
        ]);

        Menu::create($request->all());
        return redirect()->route('menu.index');
    }

    public function edit($id)
    {
        $dish = Menu::findOrFail($id);
        return view('menu.edit', compact('dish'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'dish_name' => 'required|string|max:100',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|string|max:50',
        ]);

        $dish = Menu::findOrFail($id);
        $dish->update($request->all());
        return redirect()->route('menu.index');
    }

    public function destroy($id)
    {
        $dish = Menu::findOrFail($id);
        $dish->delete();
        return redirect()->route('menu.index');
    }
}