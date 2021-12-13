<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrlShorter extends Model
{
    protected $table = 'urls';

    protected $fillable = [
        'original_url',
        'shorted_url',
    ];
}