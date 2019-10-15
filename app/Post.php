<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function scopeEntertainment($query) {
        $category = Category::where('name', 'Entertainment')->first();
        return $query->where('category_id', $category->id);
    }

    public function scopeSport($query) {
        $category = Category::whereName('Sport')->first();
        return $query->where('category_id', $category->id);
    }

    public function scopeActiveCategory($query) {
        $category_ids = Category::active()->pluck('id');
        return $query->whereIn('category_id', $category_ids);
    }

    public function isActive() {
        return $this->category->status === 'ACTIVE';
    }
}
