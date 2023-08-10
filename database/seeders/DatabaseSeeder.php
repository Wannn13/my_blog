<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create user
        User::create([
            'name' => 'Muhamad Ridwan Permana',
            'username' => 'Ridwan',
            'email' => 'ridwan@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(5)->create();

        // Create Category
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux'
        ]);

        // Create Post
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iste nemo dolor molestias magni eius nostrum assumenda corporis voluptates laudantium. Sequi eaque a laborum nostrum minus perferendis ex ipsa similique perspiciatis voluptates, illo harum in et ratione neque beatae repellat cumque itaque laboriosam nemo doloremque exercitationem, officia veniam. Repellat fugit, dolores aspernatur pariatur ipsam reiciendis voluptatibus? Velit, alias corrupti eligendi maxime molestias laudantium natus nisi enim cupiditate ipsa repellat similique ipsum in culpa sunt rem dolor, harum nobis exercitationem omnis consequuntur? Quo, sunt. Et, aut. Tempora voluptates, sequi eveniet eligendi beatae, quibusdam aliquam vel quaerat illum corporis, molestias voluptate dolor!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

    }
}
