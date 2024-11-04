<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\models\Topic;
use App\models\Author;
use App\models\Language;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rand_Topic_id = Topic::all()->random->id;
        $rand_Language_id= Language::all()->random->id;
        $rand_Author_id= Author::all()->random->id;
        return [
            'title'=> fake()->sentence(),
            'Author_id'=>$rand_Author_id,
            'Topic_id'=>$rand_Topic_id,
            'Language_id'=>$rand_Language_id,
            ];
    }
}
