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

        // User::create([
        //     'name' => 'Ardiansyah',
        //     'email' => 'ardiansyah@mail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Dody',
        //     'email' => 'dody@mail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis unde expedita architecto totam',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis unde expedita architecto totam, at laudantium? A eos ducimus necessitatibus doloremque officiis quia tempora molestias doloribus, magni veniam quod, nihil fuga quis quaerat labore nulla quidem mollitia cum esse praesentium. Quaerat, dignissimos eos. Non magni delectus, est velit odio exercitationem error eum, beatae laboriosam saepe illum fuga, earum dolorum reprehenderit numquam consectetur eveniet. Voluptatem eius a doloribus accusamus harum sed doloremque quidem excepturi aspernatur dolores eum iusto voluptate saepe perspiciatis, minima quis iste ipsum molestiae exercitationem neque sunt. Pariatur, repellendus temporibus. Aliquid blanditiis odit voluptates cumque, magni mollitia vel ut.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis unde expedita architecto totam',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis unde expedita architecto totam, at laudantium? A eos ducimus necessitatibus doloremque officiis quia tempora molestias doloribus, magni veniam quod, nihil fuga quis quaerat labore nulla quidem mollitia cum esse praesentium. Quaerat, dignissimos eos. Non magni delectus, est velit odio exercitationem error eum, beatae laboriosam saepe illum fuga, earum dolorum reprehenderit numquam consectetur eveniet. Voluptatem eius a doloribus accusamus harum sed doloremque quidem excepturi aspernatur dolores eum iusto voluptate saepe perspiciatis, minima quis iste ipsum molestiae exercitationem neque sunt. Pariatur, repellendus temporibus. Aliquid blanditiis odit voluptates cumque, magni mollitia vel ut.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis unde expedita architecto totam',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis unde expedita architecto totam, at laudantium? A eos ducimus necessitatibus doloremque officiis quia tempora molestias doloribus, magni veniam quod, nihil fuga quis quaerat labore nulla quidem mollitia cum esse praesentium. Quaerat, dignissimos eos. Non magni delectus, est velit odio exercitationem error eum, beatae laboriosam saepe illum fuga, earum dolorum reprehenderit numquam consectetur eveniet. Voluptatem eius a doloribus accusamus harum sed doloremque quidem excepturi aspernatur dolores eum iusto voluptate saepe perspiciatis, minima quis iste ipsum molestiae exercitationem neque sunt. Pariatur, repellendus temporibus. Aliquid blanditiis odit voluptates cumque, magni mollitia vel ut.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis unde expedita architecto totam',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis unde expedita architecto totam, at laudantium? A eos ducimus necessitatibus doloremque officiis quia tempora molestias doloribus, magni veniam quod, nihil fuga quis quaerat labore nulla quidem mollitia cum esse praesentium. Quaerat, dignissimos eos. Non magni delectus, est velit odio exercitationem error eum, beatae laboriosam saepe illum fuga, earum dolorum reprehenderit numquam consectetur eveniet. Voluptatem eius a doloribus accusamus harum sed doloremque quidem excepturi aspernatur dolores eum iusto voluptate saepe perspiciatis, minima quis iste ipsum molestiae exercitationem neque sunt. Pariatur, repellendus temporibus. Aliquid blanditiis odit voluptates cumque, magni mollitia vel ut.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
