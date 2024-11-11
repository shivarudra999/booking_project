<?php

namespace App\Http\Controllers\BlogController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function addblogpost(Request $request)
    {
        $request->validate([
            'blog_name'=>'required',
            'blog_description'=>'required',
            'blog_title'=>'required',
            'publish_date'=>'required',
            'keyword'=>'required',
            'status'=>'required',
        ]);
        $post = new blog();
        $post->blog_name= $request->blog_name;
        $post->blog_description= $request->blog_description;
        $post->blog_title= $request->blog_title;
        $post->publish_date= $request->publish_date;
        $post->keyword= $request->keyword;
        $post->status= $request->status;
        $post->save();
        return redirect()->to('admin/view-blog')->with('blog', 'save sucessful');
    }

    public function updateBlog(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'blog_name'=>'required',
            'blog_description'=>'required',
            'blog_title'=>'required',
            'publish_date'=>'required',
            'keyword'=>'required',
            'status'=>'required',
        ]);
        $id = $request->id;
        blog::where('id',$id)->update([
            'blog_name'=>$request->blog_name,
            'blog_description'=>$request->blog_description,
            'blog_title'=>$request->blog_title,
            'publish_date'=>$request->publish_date,
            'keyword'=>$request->keyword,
            'status'=>$request->status,
        ]);
        return redirect()->to('admin/view-blog')->with('blog', 'Update Blog sucessful');
    }

    public function DeleteBlog($id)
    {
        $delete = blog::where('id',$id)->delete();
        return redirect()->to('admin/view-blog')->with('success', 'blog delete sucessful');
    }
}
