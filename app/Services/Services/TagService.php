<?php
namespace App\Services\Services;

use App\Models\Tag;
use App\Services\Constructor\TagConstructor;

class TagService implements TagConstructor
{
    public function get()
    {
        $tags = Tag::orderBy('created_at', 'desc')->get();
        return [
            "tags" => $tags
        ];
    }

    public function show($id)
    {
        $tags = Tag::orderBy('created_at', 'desc')->get();
        return [
            "tags" => $tags
        ];
    }
}