<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductSpecification extends Model 
{

    protected $table = "productSpecification";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'key', 
        'value'
    ];

    public function product() {
    	return $this->belongsTo(Product::class);
    }
}
