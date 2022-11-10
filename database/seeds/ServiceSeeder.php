<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Sessões Grávida',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin hendrerit auctor dolor id congue. Vivamus convallis purus dolor, vel gravida felis suscipit sit amet. Nullam efficitur dolor quis orci fringilla, ac varius odio vestibulum. Aliquam eget cursus ante. Vivamus ullamcorper vestibulum risus, quis scelerisque quam dictum ut. Vivamus interdum nunc vestibulum erat cursus, nec convallis purus ullamcorper. Duis tincidunt mi nisl, sed dictum ligula finibus lacinia. Proin ac lacus ornare, laoreet ante non, euismod magna. Curabitur ut eros eu mauris varius venenatis ut eget velit. Vivamus enim lectus, pharetra id arcu non, lacinia viverra leo.'
        ]);
        DB::table('services')->insert([
            'name' => 'Newborn',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin hendrerit auctor dolor id congue. Vivamus convallis purus dolor, vel gravida felis suscipit sit amet. Nullam efficitur dolor quis orci fringilla, ac varius odio vestibulum. Aliquam eget cursus ante. Vivamus ullamcorper vestibulum risus, quis scelerisque quam dictum ut. Vivamus interdum nunc vestibulum erat cursus, nec convallis purus ullamcorper. Duis tincidunt mi nisl, sed dictum ligula finibus lacinia. Proin ac lacus ornare, laoreet ante non, euismod magna. Curabitur ut eros eu mauris varius venenatis ut eget velit. Vivamus enim lectus, pharetra id arcu non, lacinia viverra leo.'
        ]);
        DB::table('services')->insert([
            'name' => 'Crianças',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin hendrerit auctor dolor id congue. Vivamus convallis purus dolor, vel gravida felis suscipit sit amet. Nullam efficitur dolor quis orci fringilla, ac varius odio vestibulum. Aliquam eget cursus ante. Vivamus ullamcorper vestibulum risus, quis scelerisque quam dictum ut. Vivamus interdum nunc vestibulum erat cursus, nec convallis purus ullamcorper. Duis tincidunt mi nisl, sed dictum ligula finibus lacinia. Proin ac lacus ornare, laoreet ante non, euismod magna. Curabitur ut eros eu mauris varius venenatis ut eget velit. Vivamus enim lectus, pharetra id arcu non, lacinia viverra leo.'
        ]);
        DB::table('services')->insert([
            'name' => 'Família',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin hendrerit auctor dolor id congue. Vivamus convallis purus dolor, vel gravida felis suscipit sit amet. Nullam efficitur dolor quis orci fringilla, ac varius odio vestibulum. Aliquam eget cursus ante. Vivamus ullamcorper vestibulum risus, quis scelerisque quam dictum ut. Vivamus interdum nunc vestibulum erat cursus, nec convallis purus ullamcorper. Duis tincidunt mi nisl, sed dictum ligula finibus lacinia. Proin ac lacus ornare, laoreet ante non, euismod magna. Curabitur ut eros eu mauris varius venenatis ut eget velit. Vivamus enim lectus, pharetra id arcu non, lacinia viverra leo.'
        ]);
        DB::table('services')->insert([
            'name' => 'Eventos',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin hendrerit auctor dolor id congue. Vivamus convallis purus dolor, vel gravida felis suscipit sit amet. Nullam efficitur dolor quis orci fringilla, ac varius odio vestibulum. Aliquam eget cursus ante. Vivamus ullamcorper vestibulum risus, quis scelerisque quam dictum ut. Vivamus interdum nunc vestibulum erat cursus, nec convallis purus ullamcorper. Duis tincidunt mi nisl, sed dictum ligula finibus lacinia. Proin ac lacus ornare, laoreet ante non, euismod magna. Curabitur ut eros eu mauris varius venenatis ut eget velit. Vivamus enim lectus, pharetra id arcu non, lacinia viverra leo.'
        ]);
    }
}
