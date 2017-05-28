<?php

use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $postFactory = factory(\App\Models\PostTranslation::class)->create();
            $post = \App\Models\Post::find($postFactory->post_id);
            $arr = [32,47,41];
            $randIndex = array_rand($arr);
            $post->medias()->attach($arr[$randIndex]);
        }
    }
}
