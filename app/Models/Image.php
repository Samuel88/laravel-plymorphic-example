<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Image extends Model
{
    use HasFactory;

    protected $fillable = ['url'];

    public function imageable(): MorphTo {
        return $this->morphTo();
    }

    public function url(): Attribute {
        return Attribute::make(
            get: fn ($value) => asset("storage/{$value}")
        );
    }
}
