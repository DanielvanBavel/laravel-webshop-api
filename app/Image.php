<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Album;

class Image extends Model 
{
    /*
    * set database table name
    */
    protected $table = "image";

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

    public function album() {
        return $this->BelongsTo(Album::class);
    }
}
