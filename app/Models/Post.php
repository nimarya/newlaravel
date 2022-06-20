<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{
    public static function find(string $slug)
    {
        $path = __DIR__ . "/../../resources/posts/{$slug}.html";

        if (!file_exists($path)) {
            throw new ModelNotFoundException();
        }

        $post = cache()->remember("posts.{$slug}", 5, function () use ($path) {
            return file_get_contents($path);
        });

        return $post;
    }
}
