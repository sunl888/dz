<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(\App\Models\Category::class, 5)->create()->each(function ($category) {
//            factory(\App\Models\Category::class, random_int(0, 3))->create(['parent_id' => $category->id]);
//        });
//
//        factory(App\Models\User::class, 1)->create()->each(function ($user) {
//            factory(App\Models\Post::class, random_int(0, 10))->create(['user_id' => $user->id])->each(function ($post) {
//                $post->postContent()->save(factory(PostContent::class)->make());
//            });
//        });
//        $this->call(PermissionsTableSeeder::class);
//        $this->call(TypesTableSeeder::class);
//        User::find(1)->assignRole('admin')->update(['user_name' => 'tiny', 'email' => 'tiny@test.com', 'locked_at' => null]);
        // $this->call(RolesTableSeeder::class);

        // 非紧急情况禁止使用此代码!!!
        /*$categories = \App\Models\Category::byType(\App\Models\Category::TYPE_POST)->get();
        foreach ($categories as $item) {
            if ($item->posts()->count() <= 15)
                factory(App\Models\Post::class, 8)->create(['user_id' => 1, 'category_id' => $item->id])->each(function ($post) {
                    $post->postContent()->save(factory(PostContent::class)->make());
                });
        }*/
        factory(\App\Models\Banner::class, 5)->create(['type_name' => 'home_banner']);
    }
}
