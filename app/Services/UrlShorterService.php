<?php

namespace App\Services;

use App\Repositories\UrlShorterRepo;

class UrlShorterService
{
    /** @var int */
    protected $defaultLengthOfShortUrl = 5;

    /**
     * @param string $url
     * @return string
     */
    public function prepareShortUrl(string $url): string
    {
        $shortUrl = $this->generateUniqueShortUrl();

        UrlShorterRepo::create($url, $shortUrl);

        return url($shortUrl);
    }

    /**
     * @return string
     */
    protected function generateUniqueShortUrl(): string
    {
        $lengthOfShortUrl = $this->defaultLengthOfShortUrl;
        do {
            $shortUrl = $this->generateUrl($lengthOfShortUrl);
            $lengthOfShortUrl++;
        } while($this->isShortUrlAlreadyExists($shortUrl));

        return $shortUrl;
    }

    /**
     * @param string $shortUrl
     * @return bool
     */
    protected function isShortUrlAlreadyExists(string $shortUrl): bool
    {
        return (bool) UrlShorterRepo::findByShortUrl($shortUrl);
    }

    /**
     * @param int $lengthOfShortUrl
     * @return string
     */
    protected function generateUrl(int $lengthOfShortUrl = 5): string
    {
        $sourceLetters = collect(config('letters-for-generate-url'));

        return $sourceLetters->random($lengthOfShortUrl)->implode('');
    }
}