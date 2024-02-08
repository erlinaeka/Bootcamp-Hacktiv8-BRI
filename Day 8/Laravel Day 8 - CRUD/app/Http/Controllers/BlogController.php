<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->get();
        return view('crudBlog.index', compact('blogs'));
    }
    public function create(){
        return view('crudBlog.tambah-blog');
    }
    public function storeData(Request $request){
        // $image = $request->file('image');
        // echo $image->hashName();
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'title'     => 'required',
            'content'   => 'required',
            'category'  => 'required'
        ]);
        $image = $request->file('image');
        $image->storeAs('public/blogs', $image->hashName());

        $blog = Blog::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content,
            'category'  => $request->category,
            'slug'      => Str::slug($request->title, '-')
        ]);

        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('indexBlog')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('indexBlog')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function show($slug){
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('crudBlog.detail-blog', compact('blog'));
    }
    public function edit($slug){
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('crudBlog.edit-blog', compact('blog'));
    }
    public function updateData(Request $request, $id){
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'title'     => 'required',
            'content'   => 'required',
            'category'  => 'required'
        ]);
        $blog = Blog::where('id', $id)->firstOrFail();

        $image = $request->file('image');

        $image->storeAs('public/blogs', $image->hashName());

        // delete old image
        Storage::delete('public/blogs/'. $blog->image);

        $blog->update([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content,
            'category'  => $request->category,
            'slug'      => Str::slug($request->title)
        ]);

        if ($blog) {
            return redirect()->route('indexBlog')->with(['success' => 'Blog has been updated successfully']);
        } else {
            return redirect()->back()->withInput() ->with(['error' => 'Some problem has occured, please try again']);
        }

    }
    public function delete($id){
        $blog = Blog::where('id', $id)->firstOrFail();
        Storage::delete('public/blogs/'. $blog->image);
        $blog->delete();
        if ($blog) {
            return redirect()->route('indexBlog')->with(['success' => 'Blog has been delete successfully']);
        } else {
            return redirect()->back()->withInput() ->with(['error' => 'Some problem has occured, please try again']);
        }
    }
}
