<?php

namespace Database\Seeders;

use App\Models\Pilab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PilabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pilab::create([
            'parts_name' => '抵抗内蔵-5mm赤色LED(5V用)',
            'Upper_limit' => 5,
            'Lower_limit' => 1.9,
            'ohm' => 0,
            'imgPath' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.jquery-az.com%2Fhtml-img-src-image-source-attribute-with-path-possibilities-5-examples%2F&psig=AOvVaw2JYEVV4bb7O79HkZpume89&ust=1687671914357000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCJjhk_qZ2_8CFQAAAAAdAAAAABAE',
        ]);

        Pilab::create([
            'parts_name' => '抵抗内蔵-5mm黄緑色LED(5V用)',
            'Upper_limit' => 5,
            'Lower_limit' => 2.0,
            'ohm' => 0,
            'imgPath' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.jquery-az.com%2Fhtml-img-src-image-source-attribute-with-path-possibilities-5-examples%2F&psig=AOvVaw2JYEVV4bb7O79HkZpume89&ust=1687671914357000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCJjhk_qZ2_8CFQAAAAAdAAAAABAE',
        ]);

        Pilab::create([
            'parts_name' => '抵抗内蔵-5mm黄色LED(5V用)',
            'Upper_limit' => 5,
            'Lower_limit' => 2.1,
            'ohm' => 0,
            'imgPath' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.jquery-az.com%2Fhtml-img-src-image-source-attribute-with-path-possibilities-5-examples%2F&psig=AOvVaw2JYEVV4bb7O79HkZpume89&ust=1687671914357000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCJjhk_qZ2_8CFQAAAAAdAAAAABAE',
        ]);

        Pilab::create([
            'parts_name' => '抵抗内蔵-5mm青色LED(5V用)',
            'Upper_limit' => 5,
            'Lower_limit' => 2.7,
            'ohm' => 0,
            'imgPath' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.jquery-az.com%2Fhtml-img-src-image-source-attribute-with-path-possibilities-5-examples%2F&psig=AOvVaw2JYEVV4bb7O79HkZpume89&ust=1687671914357000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCJjhk_qZ2_8CFQAAAAAdAAAAABAE',
        ]);

        Pilab::create([
            'parts_name' => '抵抗内蔵-5mm白色ＬＥＤLED(5V用)',
            'Upper_limit' => 5,
            'Lower_limit' => 2.8,
            'ohm' => 0,
            'imgPath' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.jquery-az.com%2Fhtml-img-src-image-source-attribute-with-path-possibilities-5-examples%2F&psig=AOvVaw2JYEVV4bb7O79HkZpume89&ust=1687671914357000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCJjhk_qZ2_8CFQAAAAAdAAAAABAE',
        ]);
        
    }
}
