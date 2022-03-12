<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(5)->create();

        User::create([
            'name' => 'Muhammad Fachrullian Zaki Muttaqin',
            'username' =>'Hypnotic13',
            'email' => 'rangebrawler@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        // User::create([
        //     'name' => 'Ade Rizal',
        //     'email' => 'flammingcat@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy'
        ]);
        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);
        Category::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'tittle' => 'Postingan 1',
        //     'slug' => 'postingan-1',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi vitae dolor, error obcaecati debitis alias, eius sint minima quidem, ea exercitationem officiis facere eos tenetur. Consequatur dolorem amet ea magni voluptate ut tempora, iure recusandae aut illum molestias corporis voluptates nemo, accusamus at rerum quaerat temporibus incidunt atque doloremque voluptatem? Accusamus qui sit animi hic mollitia eveniet exercitationem. Aliquam harum delectus consequuntur, rerum natus minima, ducimus commodi, nam quasi dolore assumenda. Velit, harum illo ratione suscipit quo ullam asperiores minus sed quidem esse eveniet id quae! Porro atque doloribus excepturi dignissimos harum reprehenderit vero tempore nobis libero placeat, tempora mollitia praesentium neque a laudantium quod accusamus voluptatibus nam perspiciatis officiis! Ullam dicta, laudantium labore molestiae reprehenderit exercitationem tempore, id quidem repellat error quia saepe facilis deserunt autem quod laborum quisquam culpa. Maiores excepturi, deserunt enim veritatis odit unde pariatur beatae quibusdam dolore velit libero itaque, placeat incidunt accusamus dolor fuga?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'tittle' => 'Postingan 2',
        //     'slug' => 'postingan-2',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi vitae dolor, error obcaecati debitis alias, eius sint minima quidem, ea exercitationem officiis facere eos tenetur. Consequatur dolorem amet ea magni voluptate ut tempora, iure recusandae aut illum molestias corporis voluptates nemo, accusamus at rerum quaerat temporibus incidunt atque doloremque voluptatem? Accusamus qui sit animi hic mollitia eveniet exercitationem. Aliquam harum delectus consequuntur, rerum natus minima, ducimus commodi, nam quasi dolore assumenda. Velit, harum illo ratione suscipit quo ullam asperiores minus sed quidem esse eveniet id quae! Porro atque doloribus excepturi dignissimos harum reprehenderit vero tempore nobis libero placeat, tempora mollitia praesentium neque a laudantium quod accusamus voluptatibus nam perspiciatis officiis! Ullam dicta, laudantium labore molestiae reprehenderit exercitationem tempore, id quidem repellat error quia saepe facilis deserunt autem quod laborum quisquam culpa. Maiores excepturi, deserunt enim veritatis odit unde pariatur beatae quibusdam dolore velit libero itaque, placeat incidunt accusamus dolor fuga?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'tittle' => 'Postingan 3',
        //     'slug' => 'postingan-3',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi vitae dolor, error obcaecati debitis alias, eius sint minima quidem, ea exercitationem officiis facere eos tenetur. Consequatur dolorem amet ea magni voluptate ut tempora, iure recusandae aut illum molestias corporis voluptates nemo, accusamus at rerum quaerat temporibus incidunt atque doloremque voluptatem? Accusamus qui sit animi hic mollitia eveniet exercitationem. Aliquam harum delectus consequuntur, rerum natus minima, ducimus commodi, nam quasi dolore assumenda. Velit, harum illo ratione suscipit quo ullam asperiores minus sed quidem esse eveniet id quae! Porro atque doloribus excepturi dignissimos harum reprehenderit vero tempore nobis libero placeat, tempora mollitia praesentium neque a laudantium quod accusamus voluptatibus nam perspiciatis officiis! Ullam dicta, laudantium labore molestiae reprehenderit exercitationem tempore, id quidem repellat error quia saepe facilis deserunt autem quod laborum quisquam culpa. Maiores excepturi, deserunt enim veritatis odit unde pariatur beatae quibusdam dolore velit libero itaque, placeat incidunt accusamus dolor fuga?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'tittle' => 'Postingan 4',
        //     'slug' => 'postingan-4',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi vitae dolor, error obcaecati debitis alias, eius sint minima quidem, ea exercitationem officiis facere eos tenetur. Consequatur dolorem amet ea magni voluptate ut tempora, iure recusandae aut illum molestias corporis voluptates nemo, accusamus at rerum quaerat temporibus incidunt atque doloremque voluptatem? Accusamus qui sit animi hic mollitia eveniet exercitationem. Aliquam harum delectus consequuntur, rerum natus minima, ducimus commodi, nam quasi dolore assumenda. Velit, harum illo ratione suscipit quo ullam asperiores minus sed quidem esse eveniet id quae! Porro atque doloribus excepturi dignissimos harum reprehenderit vero tempore nobis libero placeat, tempora mollitia praesentium neque a laudantium quod accusamus voluptatibus nam perspiciatis officiis! Ullam dicta, laudantium labore molestiae reprehenderit exercitationem tempore, id quidem repellat error quia saepe facilis deserunt autem quod laborum quisquam culpa. Maiores excepturi, deserunt enim veritatis odit unde pariatur beatae quibusdam dolore velit libero itaque, placeat incidunt accusamus dolor fuga?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
