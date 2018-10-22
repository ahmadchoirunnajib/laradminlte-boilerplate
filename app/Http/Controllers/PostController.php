<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index() {
        $title = "Posts";
        $contents = Post::latest()->paginate(15);
        return view('back.content.post.index',compact('contents', 'title'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $title = "Posts";
        $categories = Category::all()->pluck('title', 'id');
        return view('back.content.post.create', compact('title', 'categories'));
    }

    public function store(Request $request)
    {
        $title = "Item";
        request()->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->category_id = $request->category_id;

        if(isset($request->is_published) && $request->is_published == 1) {
            $post->is_published = 1;
        } else {
            $post->is_published = 0;
        }

        $post->save();

        if (isset($request->images)) {
            foreach ($request->images as $file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('images'), $fileName);

                $image = new Image();
                $image->filename = $fileName;
                $image->post_id = $post->id;
                $image->save();

            }
        }

        return redirect()->route('posts.index')
            ->with('success', $title.' added');
    }

    public function show($id)
    {
        $title = "Posts";
        $content = Post::find($id);
        return view('back.content.post.show',compact('content', 'title'));
    }

    public function edit($id)
    {
        $title = "Posts";
        $content = Post::find($id);
        $categories = Category::all()->pluck('title', 'id');
        return view('back.content.post.edit',compact('content', 'title', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $title = "Item";
        request()->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->category_id = $request->category_id;

        if(isset($request->is_published) && $request->is_published == 1) {
            $post->is_published = 1;
        } else {
            $post->is_published = 0;
        }

        $post->save();

        if (isset($request->images)) {
            foreach ($request->images as $file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('images'), $fileName);

                $image = new Image();
                $image->filename = $fileName;
                $image->post_id = $post->id;
                $image->save();

            }
        }

        return redirect()->route('posts.index')
            ->with('success', $title.' updated');

    }

    public function destroy($id)
    {
        $title = "Item";
        Post::find($id)->delete();
        return redirect()->back()
            ->with('success', $title.' deleted');
    }

    public function deletePostImage($id) {
        Image::find($id)->delete();
        return back();
    }
}
