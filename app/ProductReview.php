<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductReview extends Model 
{
    /*
    * set database table name
    */
    protected $table = "product_review";

    /*
    * Disable created_at and updated_at in table
    */
    public $timestamps = false;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'date',
        'description'
    ];

    public function products() {
        return $this->belongsTo(Product::class);
    }
}
