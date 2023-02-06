<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $tags = [
            
            'carne',
            'pesce',
            'vegetariano',
            'senza lattosio',
            'vegano'
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->save();
        }
    }
}
