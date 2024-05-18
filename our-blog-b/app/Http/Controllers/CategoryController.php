<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        //        select * from category;
        $categories = Category::all();

        if ($request->expectsJson()) {
            return $categories;
        }
        return view('category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $validated = $request->validated();

        $category = Category::create($validated);

        if ($request->expectsJson()) {
            return $category;
        }

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @param $request
     * @return \Illuminate\Http\Response
     */
    public function show($id, $request)
    {
        $category = Blog::findOrFail($id);

        if ($request->expectsJson()) {
            return $category;
        }

        return view('category-show', ['category' => $category]);
    }


    public function edit($id)
    {
        $category = Blog::findOrFail($id);

        return view('category-edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validated();

        $category = Category::findOrFail($id);

        $category->update($validated);

        if ($request->expectsJson()) {
            return $category;
        }

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @param $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($request, $id)
    {
        Category::destroy($id);

        if ($request->expectsJson()) {
            return response()->status(204);
        }

        return redirect(route('categories.index'));
    }
}
