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
            'name' => 'Susana Esteves',
            'comment' => 'Excelente profissional. Sem dúvida que recomendo.',
            'visibility' => '1',

        ]);

        DB::table('testimonals')->insert([
            'name' => 'Sandra Jesus',
            'comment' => 'Para o meu filho, só poderia escolher o melhor. Com a Catarina está em boas mãos.',
            'visibility' => '1',

        ]);

        DB::table('testimonals')->insert([
        'name' => 'Alice Moutinho',
        'comment' => 'A Catarina foi muito cuidadosa em todo o processo fotográfico. O meu filho consegue ser muito irrequieto, mas as sessões fotográficas foram um sucesso. Recomendo! ',
        'visibility' => '1',

    ]);
        DB::table('testimonals')->insert([
        'name' => 'Zeferino Fernandes',
        'comment' => 'Recomendo, sem dúvida alguma.
        A melhor profissional para captar as bochechas da minha querida filha.
        Gostei muito do resultado final. ',
        'visibility' => '1',
    ]);
    }
}
