<?php

use Illuminate\Database\Seeder;

class TestimonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonals')->insert([
            'name' => 'Ricardinho Quaresma',
            'comment' => 'comentário',
            'visibility' => '0',

        ]);

        DB::table('testimonals')->insert([
            'name' => 'Sandra Jesus',
            'comment' => 'Um comentário',
            'visibility' => '1',

        ]);

        DB::table('testimonals')->insert([
        'name' => 'Fatima felgueiras',
        'comment' => 'dois comentário',
        'visibility' => '0',

    ]);
        DB::table('testimonals')->insert([
        'name' => 'Pinto da costa',
        'comment' => 'trÊs comentário',
        'visibility' => '1',
    ]);
    }
}
