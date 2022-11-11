<?php

use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->insert([
            'logo' => '',
            'name' => 'Catarina Barbosa Fotografia',
            'email' => 'catarinabarbosafotografia@gmail.com',
            'phone_number' => '912164392',
            'address' => '',
            'city' => 'Marco Canaveses',
            'country' => 'Portugal',
            'postal_code' => '4630-000',
            'facebook' => 'https://www.facebook.com/CatarinaBarbosaFotografia',
            'instagram' => 'https://www.instagram.com/catarinabarbosafotografia/',
            'linkedin' => ' '
        ]);
    }
}
