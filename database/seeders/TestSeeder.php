<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(25)->create();
        //Cuando ya tenemos el factory relleno y se le "llama" desde DatabaseSeeder ejecutamos el comando
        // sail artisan migrate:fresh --seed
    }
}
