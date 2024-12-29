<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SeoField extends Model
{
    use HasFactory;

    protected $fillable = ['meta_title'];

    public function seoFieldable(): MorphTo {
        return $this->morphTo();
    }
}
