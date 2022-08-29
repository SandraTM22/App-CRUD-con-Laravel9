<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;
    //este es el modelo que se va a encargar

    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(8,true),
            'slug'=>$this->faker->slug,
            'body'=>$this->faker->text(200)
        ];

        //Cuando ya tenemos los datos que queremos que rellenen tenemos que ir a el Seeder y llamar a:
        //Post::factory(Nregistros)->create y a continuación ejecutamos comando Refresh
    }
}
