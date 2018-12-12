<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call('CategoryTableSeeder');
        $this->call('ProductTableSeeder');
        $this->call('ProductReviewTableSeeder');
        $this->call('ProductSpecsTableSeeder');
        $this->call('AlbumTableSeeder');
        $this->call('ImageTableSeeder');
    }
}
