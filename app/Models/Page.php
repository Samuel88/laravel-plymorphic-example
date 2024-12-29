<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];
    
    public function seoField(): MorphOne {
        return $this->morphOne(SeoField::class, 'seo_fieldable');
    }

    public function image(): MorphOne {
        return $this->morphOne(Image::class, 'imageable');
    }
}
