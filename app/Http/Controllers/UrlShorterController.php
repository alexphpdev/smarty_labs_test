<?php

namespace App\Http\Controllers;

use App\Http\Requests\UrlShorterRequest;
use App\Services\UrlShorterService;

class UrlShorterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('url_shorter.index');
    }

    /**
     * @param UrlShorterRequest $request
     * @param UrlShorterService $shortUrlService
     * @return string
     */
    public function generateShortUrl(UrlShorterRequest $request, UrlShorterService $shortUrlService)
    {
        return $shortUrlService->prepareShortUrl($request->original_url);
    }
}
