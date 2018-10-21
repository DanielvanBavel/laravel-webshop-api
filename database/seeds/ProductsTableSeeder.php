<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
		    'category_id' 	=> 1,
		    'name'			=> '55 inch Full HD 4K tv',
		    'image' 		=> '/static/images/bg-img/1.jpg',
		    'price' 		=> 1900,
		    'tags'			=> '["Televisies", "Samsung"]',
		    'description'	=> 'De Samsung LT32H390FEVXEN is een monitor-tv met een scherm van 32 inch, ingebouwde tv-tuner en Picture-in-Picture-functie. Wanneer je tv wilt kijken schakel je eenvoudig van monitorweergave naar tv-weergave. Dankzij de Picture-in-Picture-functie kun je zelfs een serie kijken terwijl je doorwerkt op je computer. De Full HD-resolutie zorgt ervoor dat de beelden op je scherm haarscherp en in detail worden weergeven. Zo geniet je altijd van een helder en mooi beeld, of je nou tv-kijkt of aan het werk bent op je computer. De Samsung LT32H390FEVXEN is voorzien van 2 HDMI-aansluitingen en 1 USB-aansluiting. Zo sluit je naast je computer ook eenvoudig een gameconsole of blu-rayspeler aan en speel je eenvoudig multimediabestanden af vanaf een USB-stick.',
		    'onHomePage' 	=> '1'
        ]);
        DB::table('products')->insert([
		    'category_id' 	=> 1,
		    'name'			=> 'FIFA 19 Playstation 4',
		    'image' 		=> '/static/images/bg-img/2.jpg',
		    'price' 		=> 1500,
		    'tags'			=> '["Game", "Playstation", "FIFA"]',
		    'description'	=> 'EA Sports FIFA 19, aangedreven door Frostbite, levert zowel op als buiten het veld een kampioenswaardige ervaring. FIFA 19, met de prestigieuze UEFA Champions League, biedt verbeterde gameplaytools waarmee je op elk moment het veld kunt overheersen met ongeëvenaarde manieren om te spelen, plus een dramatische finale van het verhaal van Alex Hunter in The Journey: Champions, een nieuwe game mode in het zo populaire FIFA Ultimate Team en meer. Champions rise op in FIFA 19',
		    'onHomePage' 	=> '1'
        ]);
        DB::table('products')->insert([
		    'category_id' 	=> 1,
		    'name'			=> 'FIFA 18 Playstation 4',
		    'image' 		=> '/static/images/bg-img/3.jpg',
		    'price' 		=> 36.50,
		    'tags'			=> '["Game", "Playstation", "FIFA"]',
		    'description'	=> 'EA Sports FIFA 19, aangedreven door Frostbite, levert zowel op als buiten het veld een kampioenswaardige ervaring. FIFA 19, met de prestigieuze UEFA Champions League, biedt verbeterde gameplaytools waarmee je op elk moment het veld kunt overheersen met ongeëvenaarde manieren om te spelen, plus een dramatische finale van het verhaal van Alex Hunter in The Journey: Champions, een nieuwe game mode in het zo populaire FIFA Ultimate Team en meer. Champions rise op in FIFA 19',
		    'onHomePage' 	=> '1'
        ]);
        DB::table('products')->insert([
		    'category_id' 	=> 2,
		    'name'			=> 'FIFA 17 Playstation 4',
		    'image' 		=> '/static/images/bg-img/4.jpg',
		    'price' 		=> 15.95,
		    'tags'			=> '["Game", "Playstation", "FIFA"]',
		    'description'	=> 'EA Sports FIFA 19, aangedreven door Frostbite, levert zowel op als buiten het veld een kampioenswaardige ervaring. FIFA 19, met de prestigieuze UEFA Champions League, biedt verbeterde gameplaytools waarmee je op elk moment het veld kunt overheersen met ongeëvenaarde manieren om te spelen, plus een dramatische finale van het verhaal van Alex Hunter in The Journey: Champions, een nieuwe game mode in het zo populaire FIFA Ultimate Team en meer. Champions rise op in FIFA 19',
		    'onHomePage' 	=> '0'
        ]);
        DB::table('products')->insert([
		    'category_id' 	=> 2,
		    'name'			=> 'FIFA 19 Playstation 4',
		    'image' 		=> '/static/images/bg-img/5.jpg',
		    'price' 		=> 59.95,
		    'tags'			=> '["Game", "Playstation", "FIFA"]',
		    'description'	=> 'EA Sports FIFA 19, aangedreven door Frostbite, levert zowel op als buiten het veld een kampioenswaardige ervaring. FIFA 19, met de prestigieuze UEFA Champions League, biedt verbeterde gameplaytools waarmee je op elk moment het veld kunt overheersen met ongeëvenaarde manieren om te spelen, plus een dramatische finale van het verhaal van Alex Hunter in The Journey: Champions, een nieuwe game mode in het zo populaire FIFA Ultimate Team en meer. Champions rise op in FIFA 19',
		    'onHomePage' 	=> '0'
        ]);
    }
}
