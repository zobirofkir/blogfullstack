<?php

namespace App\Services\Services;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Services\Constructor\CommentConstructor;

class CommentService implements CommentConstructor
{
    public function get()
    {
        $blogId = request()->get('blog_id'); // Get the blog_id from the request

        $comments = Comment::where('blog_id', $blogId)->get();

        return [
            "comments" => $comments
        ];
    }

    public function post(CommentRequest $request)
    {
        return Comment::create(array_merge(
            ["blog_id" => $request->blog_id],
            $request->validated()
        ));
    }
}
