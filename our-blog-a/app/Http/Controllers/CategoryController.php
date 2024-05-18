<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
//        Fetch all categories
        $categories = Category::all();

//        Pass retrieved categories to the view
        return view("categories", ['categories' => $categories]);
    }

    public function create()
    {
        return view('categories-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'alpha:ascii']
        ]);

        $category = Category::create($validated);

        return redirect(route('categories'));
    }

    public function destroy(int $categoryId)
    {
        $category = Category::findOrFail($categoryId);

        $category->delete();

        return redirect(route('categories'));
    }
    public  function edit(int $id)
    {
        $category=Category::findOrFail($id);
        return view('categories-edit', ['category' => $category]);
    }

    public function update(Request $request, $categoryId)
    {
        $title = $request->input('title');

        $category = Category::findOrFail($categoryId);

        $category->update([
            "title" => $title
        ]);

        return redirect(route('categories'));
    }
}
