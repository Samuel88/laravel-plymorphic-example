<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    public function seoField(): MorphOne {
        return $this->morphOne(SeoField::class,'seo_fieldable');
    }

    public function images(): MorphMany {
        return $this->morphMany(Image::class, 'imageable');
    }

}
