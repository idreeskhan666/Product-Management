<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
{
    $items = Item::all();
    return view('items.index', compact('items'));
}

public function create()
{
    return view('items.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'description' => 'required',
    ]);

    Item::create($data);

    return redirect()->route('items.index');
}

public function edit(Item $item)
{
    return view('items.edit', compact('item'));
}

public function update(Request $request, Item $item)
{
    $data = $request->validate([
        'name' => 'required',
        'description' => 'required',
    ]);

    $item->update($data);

    return redirect()->route('items.index');
}

public function destroy(Item $item)
{
    $item->delete();

    return redirect()->route('items.index');
}
}
