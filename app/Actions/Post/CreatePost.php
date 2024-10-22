<?php

namespace App\Actions\Post;

use App\Dtos\PostDto;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

class CreatePost
{

    public function execute(PostDto $dto)
    {
        $user = Auth::user();
        $post = $user->posts()->create([
            'title' => $dto->title,
            'content' => $dto->content,
        ]);

        if (isset($data['tags'])) {
            $post->tags()->sync($data['tags']);
        }

        return $post;
    }
}
