<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 5-12-2018
 * Time: 19:45
 */

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('image')->insert([
		    'album_id' 		=> '1',
		    'title'			=> 'chair 1',
		    'image'			=> '/static/images/product-img/pro-big-1.jpg'
        ]);

        DB::table('image')->insert([
		    'album_id' 		=> '1',
		    'title'			=> 'chair 2',
		    'image'			=> '/static/images/product-img/pro-big-2.jpg'
        ]);

        DB::table('image')->insert([
		    'album_id' 		=> '1',
		    'title'			=> 'chair 3',
		    'image'			=> '/static/images/product-img/pro-big-2.jpg'
        ]);

        DB::table('image')->insert([
		    'album_id' 		=> '1',
		    'title'			=> 'chair 4',
		    'image'			=> '/static/images/product-img/product5.jpg'
        ]);
    }
}