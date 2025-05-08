<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; // ← Adicione esta linha

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all(); // ← Note o uso correto da classe
        return view('items.index', compact('items'));
    }

    public function store(Request $request)
{
    $request->validate(['name' => 'required|max:255']);
    
    // Pegar APENAS o campo necessário
    Item::create($request->only('name'));
    
    return redirect('/');
}

public function destroy(Item $item)
{
    $item->delete();
    return redirect('/');
}
}
