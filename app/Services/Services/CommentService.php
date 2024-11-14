<?php

namespace App\Services\Services;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Services\Constructor\CommentConstructor;

class CommentService implements CommentConstructor
{
    public function get()
    {
        $blogId = request()->get('blog_id');
    
        /**
         * Filter Comments by Blog
         */
        $comments = Comment::where('blog_id', $blogId)
                            ->orderBy('created_at', 'desc')
                            ->get(); 
    
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
