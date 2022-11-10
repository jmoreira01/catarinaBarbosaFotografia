<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'url' => 'https://www.youtube.com/watch?v=eYMm0nZQfhQ',
            'service_id' => '1'
        ]);
    }
}
