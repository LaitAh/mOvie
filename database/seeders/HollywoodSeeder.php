<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class HollywoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = Actor::factory(100)->create();
        $directors = Director::factory(30)->create();

        Movie::factory(50)
                ->state(new Sequence(
                    fn () => ['director_id' => $directors->random()]
                ))
                ->create()
                ->each(
                    fn ($movie) => $movie->actors()->attach($actors->random(rand(5, 10)))
                );
    }
}
