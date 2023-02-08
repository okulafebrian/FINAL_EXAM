<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'Carrots',
                'description' => 'Carrots are crunchy and sweet root vegetables that come in various shades of orange. They are a good source of vitamins A and C, and potassium.',
                'price' => 100,
                'photo' => 'vegetables.png'
            ],
            [
                'name' => 'Broccoli',
                'description' => 'Broccoli is a green vegetable with a tree-like appearance and a slightly bitter taste. It is a good source of fiber, vitamin C, and calcium.',
                'price' => 200,
                'photo' => 'vegetables.png'
            ],
            [
                'name' => 'Spinach',
                'description' => 'Spinach is a leafy green vegetable with a slightly bitter taste. It is high in iron, vitamin K, and antioxidants. ',
                'price' => 250,
                'photo' => 'vegetables.png'
            ],
            [
                'name' => 'Sweet Potatoes',
                'description' => 'Sweet potatoes are a starchy root vegetable with a sweet and nutty flavor. They are a good source of fiber, vitamins A and C, and potassium.',
                'price' => 200,
                'photo' => 'vegetables.png'
            ],
            [
                'name' => 'Bell Peppers',
                'description' => 'Bell peppers come in a variety of colors, including red, yellow, and green, and are a good source of vitamin C and fiber.',
                'price' => 100,
                'photo' => 'vegetables.png'
            ],
            [    
                'name' => 'Apples',
                'description' => 'Apples are a sweet and crunchy fruit that come in many different varieties, including Granny Smith, Red Delicious, and Golden Delicious. They are a good source of fiber and vitamin C.',
                'price' => 250,
                'photo' => 'fruits.png'
            ],
            [    
                'name' => 'Bananas',
                'description' => 'Bananas are a sweet and creamy fruit that are a good source of potassium and vitamin C.',
                'price' => 200,
                'photo' => 'fruits.png'
            ],
            [    
                'name' => 'Oranges',
                'description' => 'Oranges are a sweet and juicy citrus fruit that are a good source of vitamin C.',
                'price' => 300,
                'photo' => 'fruits.png'
            ],
            [    
                'name' => 'Strawberries',
                'description' => 'Strawberries are a sweet and juicy fruit that are high in antioxidants and vitamin C.',
                'price' => 350,
                'photo' => 'fruits.png'
            ],
            [    
                'name' => 'Grapes',
                'description' => 'Grapes are a sweet and juicy fruit that come in many different varieties, including red, green, and black. They are a good source of fiber and vitamins C and K.',
                'price' => 300,
                'photo' => 'fruits.png'
            ],
            [    
                'name' => 'Chicken Breast',
                'description' => 'Chicken breast is a lean and versatile cut of meat that is high in protein. It can be grilled, baked, or sautéed, and is a staple in many meals.',
                'price' => 400,
                'photo' => 'meats.png'
            ],
             [    
                'name' => 'Ground Beef',
                'description' => 'Ground beef is a staple ingredient in many dishes and can be used for burgers, meatloaf, and tacos. It is high in protein and iron.',
                'price' => 500,
                'photo' => 'meats.png'
            ],
             [    
                'name' => 'Pork Chops',
                'description' => 'Pork chops are a tender and juicy cut of meat that are high in protein and vitamins B1 and B12. They can be grilled, baked, or fried.',
                'price' => 600,
                'photo' => 'meats.png'
            ],
             [    
                'name' => 'Salmon',
                'description' => 'Salmon is a fatty fish that is high in omega-3 fatty acids and vitamins B12 and D. It can be grilled, baked, or smoked, and is a popular choice for a healthy meal.',
                'price' => 1500,
                'photo' => 'meats.png'
            ],
             [    
                'name' => 'Sirloin Steak',
                'description' => 'Sirloin steak is a lean and tender cut of beef that is high in protein and iron. It can be grilled, pan-fried, or broiled, and is a popular choice for a hearty meal.',
                'price' => 1200,
                'photo' => 'meats.png'
            ]
        ]);
    }
}
