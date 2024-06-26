<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //        select * from blogs;
        $blogs = Blog::all();

        return view('blog-index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BlogRequest $request
     * @return Response
     */
    public function store(BlogRequest $request)
    {
        $validated = $request->validated();

        $blog = Blog::create($validated);

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blog-show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blog-edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BlogRequest $request
     * @param int $id
     * @return Response
     */
    public function update(BlogRequest $request, $id)
    {
        $validated = $request->validated();

        $blog = Blog::findOrFail($id);

        $blog->update($validated);

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);

        return redirect(route('blogs.index'));
    }
}
