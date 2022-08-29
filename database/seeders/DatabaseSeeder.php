<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(TestSeeder::class);

        //Aqui se podria insertar los datos uno por uno de la siguiente manera
            /*$post = new Post();
            $post->title ="Ejemplo de titulo";
            $post->body ="Ejemplo de body";*/
                //Si queremos rellenar con datos falsos utilizamos FAKER en factory.

    }
}
