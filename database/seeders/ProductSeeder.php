<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Space Suit T-shirt ホワイト',
                'description' => '綿100%のdrawn_by_haruオリジナルイラストTシャツ',
                'image' => '/images/whiteT.svg',
                'price' =>'2600'
            ],
            [
                'name' => 'Space Suit T-shirt ナチュラル',
                'description' => '綿100%のdrawn_by_haruオリジナルイラストTシャツ',
                'image' => '/images/naturalT.svg',
                'price' =>'2600'
            ],
            [
                'name' => 'Space Suit T-shirt イエロー',
                'description' => '綿100%のdrawn_by_haruオリジナルイラストTシャツ',
                'image' => '/images/yellowT.svg',
                'price' =>'2600'
            ],
            [
                'name' => 'Space Suit T-shirt ピンク',
                'description' => '綿100%のdrawn_by_haruオリジナルイラストTシャツ',
                'image' => '/images/pinkT.svg',
                'price' =>'2600'
            ],
        ]);
    }
}
