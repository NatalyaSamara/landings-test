<?php

namespace App\Services;

class SlugService
{
    public function createSlug(string $title): string
    {
        $slug = preg_replace('/[^\w\d\-\ ]/', '', mb_strtolower(trim($title)));
        $slug = preg_replace('/\-{2,}/', '-', str_replace(' ', '-', $slug));
        if (mb_strlen($slug) > 60) {
            $shortSlug = mb_substr($slug, 0, 60);
            $slug = mb_substr($shortSlug, 0, strrpos($shortSlug, '-', -1));
        }
        return $slug;

    }
}
