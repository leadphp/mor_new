<?php

namespace App;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
	use HasSlug;
    protected $fillable = [
        'title' , 'description' , 'image_banner' , 'slug' 
    ];
    protected $table = 'pages';

    public function getSlugOptions() : SlugOptions
    {
    	return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
