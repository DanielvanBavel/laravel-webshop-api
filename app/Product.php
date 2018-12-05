<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\ProductSpecification;
use App\ProductReview;
use App\Album;
use App\Category;


class Product extends Model 
{

    protected $table = "product";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'price',
        'description'
    ];

    public function specifications() {
        return $this->hasMany(ProductSpecification::class);
    }

    public function reviews() {
        return $this->hasMany(ProductReview::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function album() {
        return $this->hasOne(Album::class);
    }
}
