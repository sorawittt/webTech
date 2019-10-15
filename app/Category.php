<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;

    public function posts() {
        return $this->hasMany(Post::class);
    }


    public function isActive() {
        return $this->status === 'ACTIVE';
    }

    public function scopeActive($query) {
        return $query->where('status', 'ACTIVE');
    }
}
