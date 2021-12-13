<?php

namespace App\Repositories;

use App\Models\UrlShorter;

class UrlShorterRepo
{

    /**
     * @param string $url
     * @param string $shortUrl
     * @return UrlShorter
     */
    public static function create(string $url, string $shortUrl)
    {
        return UrlShorter::create([
            'original_url' => $url,
            'shorted_url' => $shortUrl
        ]);
    }

    /**
     * @param string $shortUrl
     * @return UrlShorter|null
     */
    public static function findByShortUrl(string $shortUrl)
    {
        return UrlShorter::where('shorted_url', $shortUrl)->first();
    }
}