<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Image;

class Album extends Model 
{
    /*
    * set database table name
    */
    protected $table = "album";

    /*
    * Disable created_at and updated_at in table
    */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
}
