<?php

use Faker\Provider\Lorem;
use Phinx\Seed\AbstractSeed;

class PostSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'title' => 'Title ' . $i,
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }

        $posts = $this->table('posts');
        $posts->insert($data)
            ->saveData();
    }
}
