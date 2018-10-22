<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $title = "Category";
        $contents = Category::latest()->paginate(5);
        return view('back.content.category.index',compact('contents', 'title'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $title = "Category";
        return view('back.content.category.create', compact('title'));
    }

    public function store(Request $request)
    {
        $title = "Category";
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'slug' => 'required',
        ]);

        $category = new Category;

        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->description = $request->description;

        $category->save();

        return redirect()->route('category.index')
            ->with('success', $title.' added');
    }

    public function show($id)
    {
        $title = "Category";
        $content = Category::find($id);
        return view('back.content.category.show',compact('content', 'title'));
    }

    public function edit($id)
    {
        $title = "Category";
        $content = Category::find($id);
        return view('back.content.category.edit',compact('content', 'title'));
    }

    public function update(Request $request, $id)
    {
        $title = "Category";
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'slug' => 'required',
        ]);

        $category = Category::find($id);

        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->description = $request->description;

        $category->save();

        return redirect()->route('category.index')
            ->with('success', $title.' updated');
    }

    public function destroy($id)
    {
        $title = "Category";
        Category::find($id)->delete();
        return redirect()->route('category.index')
            ->with('success', $title.' deleted');
    }
}
