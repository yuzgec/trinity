<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class PageGallery extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,HasMediaTrait;

    protected $guarded = [];
    protected $table = 'page_gallery';


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(400)
            ->height(250)
            ->nonOptimized();
    }
}
