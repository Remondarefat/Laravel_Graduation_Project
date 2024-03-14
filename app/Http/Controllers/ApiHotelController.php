<?php

namespace App\Http\Controllers;

use App\Models\Hotel;

use Illuminate\Http\Request;

class ApiHotelController extends Controller
{
    // public function index()
    // {
    //     $followings = Auth::user()->followings;
    //     $posts = Post::whereIn('user_id', $followings->pluck('id'))
    //     ->latest()
    //     ->get();
    //     $comments=Comment::all();
    //     $commentlike=CommentLike::all();
    //     $userid = Auth::user()->id;
    //     $like = Like::where('user_id', Auth::user()->id)->get();
    //     return view('posts.home', ['commentlike'=>$commentlike,'posts' => $posts, 'like' => $like, 'userid' => $userid,'comments'=>$comments]);
    // }
    public function store(Request $request)
    {

        $data=$request->validate([
            'name' => 'string',
            'location' => 'string',
            'description' => 'string',
            'stars' => 'required',

        ]);
        Hotel::create($data);

        // $croppedImageDataUrls = json_decode($request->croppedImageDataUrls);

        // foreach ($croppedImageDataUrls as $imageDataUrl) {
        //     // Remove the data URI scheme from the image URL
        //     $imageDataUrl = preg_replace('#^data:image/\w+;base64,#i', '', $imageDataUrl);
        //     // Decode the base64-encoded image data into binary data
        //     $imageData = base64_decode($imageDataUrl);
        //     // Generate a unique filename for the image

        //     $filename = uniqid() . '.png';
        //     // Store the image data directly in the storage directory
        //     $path = Storage::put('public/images/' . $filename, $imageData);

        //     $path = str_replace('public/', 'storage/', $path);

        //     // Save the image path to the database
        //     $media = new Media();
        //     $media->media_url = $filename;
        //     $media->post_id = $post->id;
        //     $media->save();
        // }



            return response()->json(['success' => 'hotel created successfully']);
    }
}
