<?php

namespace App\Http\Controllers;

use App\Actions\Post\CreatePost;
use App\Dtos\PostDto;
use App\Http\Requests\PostRequest;
use App\Mail\PostCreatedMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::with('user')->get();
        return response()->json($post);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request, CreatePost $action)
    {
        $action->execute(PostDto::fromRequest($request));
        return response()->json(['message' => 'Post created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
