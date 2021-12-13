<?php

namespace App\Http\Controllers;

use App\Repositories\UrlShorterRepo;

class RedirectController extends Controller
{
    /**
     * @param $shortUrl
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function __invoke($shortUrl)
    {
        $urlShorter = UrlShorterRepo::findByShortUrl($shortUrl);

        if ($urlShorter) {
            return redirect()->away($urlShorter->original_url);
        }

        abort(404);
    }
}
