<?php

namespace Database\Seeders;

use App\Models\Argument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArgumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Argument::factory()->create([
            'title' => 'Collaborative',
            'body'  => 'Tout le monde est libre de modifier la base de données ! Comment ça pourrait mal se passer ?',
        ]);
        Argument::factory(7)->create();
    }
}
