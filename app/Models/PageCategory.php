<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Kalnoy\Nestedset\NodeTrait;

class PageCategory extends Model implements HasMedia
{
    use HasFactory,SoftDeletes,InteractsWithMedia,LogsActivity,NodeTrait;

    protected $guarded = [];
    protected $table = 'page_categories';


    function getCategoryCount()
    {
        return $this->hasMany('App\Models\Page', 'category')->count();
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'slug']);
        // Chain fluent methods for configuration options
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(400)
            ->height(250)
            ->nonOptimized();
    }
}
