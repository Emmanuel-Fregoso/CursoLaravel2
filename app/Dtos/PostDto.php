<?php

namespace App\Dtos;

use App\Http\Requests\PostRequest;

class PostDto
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public readonly string $title,
        public readonly string $content,
    )
    {

    }

    public static function fromRequest(PostRequest $request): self
    {
        return new self(
            title: $request->validated('title'),
            content: $request->validated('content'),
        );
    }
}
