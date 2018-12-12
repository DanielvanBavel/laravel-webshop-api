<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 5-12-2018
 * Time: 19:43
 */

use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('album')->insert([
		    'product_id' 	=> '1',
		    'name'			=> 'default product album'
        ]);
    }
}