<?php

namespace App\Http\Controllers\Gallerycontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallery_masters;

class Gallerycontroller extends Controller
{
    public function addpostgallery(Request $request)
   {
    // dd($request->all());
    $post = new gallery_masters();
    $post->photo= $request->photo;
    $post->photo_description= $request->photo_description;
    $post->photo_title= $request->photo_title;
    $post->status= $request->status;
    $post->save();
    return redirect()->to('admin/view-gallery')->with('event', 'Event date & time same');

   }

}
