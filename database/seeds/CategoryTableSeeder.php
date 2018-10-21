<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
	
	public function run() {
		DB::table('category')->insert([
		    'name' => 'Beeld & Geluid'
        ]);
        DB::table('category')->insert([
		    'name' => 'Computer'
        ]);
        DB::table('category')->insert([
		    'name' => 'Keuken'
        ]);

	} 
}