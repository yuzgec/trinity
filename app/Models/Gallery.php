<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Gallery extends Model implements HasMedia
{
    use HasFactory,SoftDeletes,InteractsWithMedia;

    protected $guarded = [];
    protected $table = 'gallery';

    public function getCategory(){
        return $this->belongsTo('App\Models\GalleryCategory', 'category');
    }


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'slug']);
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(400)
            ->height(250)
            ->nonOptimized();
    }
}
