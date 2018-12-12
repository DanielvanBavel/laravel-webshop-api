<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 5-12-2018
 * Time: 19:38
 */

use Illuminate\Database\Seeder;

class ProductReviewTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('product_review')->insert([
    		'product_id'	=> '1',
    		'title'			=> 'Hier nooit meer...',
    		'description'	=> '',
    		'review_date'	=> 2018-12-8,
    		'stars'			=> '1',
    		'recommended'	=> 0
    	]);

    	DB::table('product_review')->insert([
    		'product_id'	=> '1',
    		'title'			=> 'heel mager het product.',
    		'description'	=> '',
    		'review_date'	=> 2018-12-9,
    		'stars'			=> '2',
    		'recommended'	=> 0
    	]);

		DB::table('product_review')->insert([
			'product_id'	=> '1',
			'title'			=> 'goed product maar niet wat ik had verwacht',
			'description'	=> '',
			'review_date'	=> 2018-12-10,
			'stars'			=> '3',
			'recommended'	=> 1
    	]);

    	DB::table('product_review')->insert([
			'product_id'	=> '1',
			'title'			=> 'Goed product, maar toch wat verbeterpunten',
			'description'	=> '',
			'review_date'	=> 2018-12-11,
			'stars'			=> '4',
			'recommended'	=> 1
    	]);

    	DB::table('product_review')->insert([
			'product_id'	=> '1',
			'title'			=> 'Echt een top product',
			'description'	=> '',
			'review_date'	=> 2018-12-12,
			'stars'			=> '5',
			'recommended'	=> 1
    	]);
    }
}