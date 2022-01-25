<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ServiceCategory extends Model implements HasMedia
{
    use HasFactory,SoftDeletes,InteractsWithMedia,LogsActivity,NodeTrait;

    protected $guarded = [];
    protected $table = 'service_categories';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'slug']);
    }

    function getCategoryCount()
    {
        return $this->hasMany('App\Models\Service', 'category')->count();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(400)
            ->height(250)
            ->nonOptimized();
    }
}
