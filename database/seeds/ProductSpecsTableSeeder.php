<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 5-12-2018
 * Time: 19:43
 */

use Illuminate\Database\Seeder;

class ProductSpecsTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('product_specification')->insert([
		    'product_id' 	=> 1,
		    'key'			=> 'Beeldresolutie',
		    'value' 		=> 'Ultra HD 4K'
        ]);

		DB::table('product_specification')->insert([
		    'product_id' 	=> 1,
		    'key'			=> 'Beeldschermdiagonaal',
		    'value' 		=> '138cm'
        ]);
		
		DB::table('product_specification')->insert([
		    'product_id' 	=> 1,
		    'key'			=> 'Type apparaat',
		    'value' 		=> 'Led-tv'
        ]);
		
		DB::table('product_specification')->insert([
		    'product_id' 	=> 1,
		    'key'			=> 'Schermdesign',
		    'value' 		=> 'Flat'
        ]);

        DB::table('product_specification')->insert([
		    'product_id' 	=> 1,
		    'key'			=> 'Beeldschermdiagonaal',
		    'value' 		=> '55 inch'
        ]);
    }
}