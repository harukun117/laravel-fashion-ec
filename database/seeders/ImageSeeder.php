<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'product_id' => 1,
                'image' => '/images/whiteT.svg',
                
            ],
            [
                'product_id' => 1,
                'image' => '/images/design.png',
                
            ],
            [
                'product_id' => 1,
                'image' => '/images/Tsize.png',
                
            ],
            [
                'product_id' => 2,
                'image' => '/images/naturalT.svg',
                
            ],
            [
                'product_id' => 2,
                'image' => '/images/design.png',
                
            ],
            [
                'product_id' => 2,
                'image' => '/images/Tsize.png',
                
            ],
            [
                'product_id' => 3,
                'image' => '/images/yellowT.svg',
                
            ],
            [
                'product_id' => 3,
                'image' => '/images/design.png',
                
            ],
            [
                'product_id' => 3,
                'image' => '/images/Tsize.png',
                
            ],
            [
                'product_id' => 4,
                'image' => '/images/pinkT.svg',
                
            ],
            [
                'product_id' => 4,
                'image' => '/images/design.png',
                
            ],
            [
                'product_id' => 4,
                'image' => '/images/Tsize.png',
                
            ],


            
        ]);
    }
}
