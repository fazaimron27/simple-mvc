<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
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
        $faker = Faker\Factory::create('ID_id');
        $data = [];
        for ($i = 0; $i < 25; $i++) {
            $data[] = [
                'username'      => $faker->name,
                'email'         => $faker->safeEmail,
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ];
        }

        $posts = $this->table('users');
        $posts->insert($data)
            ->saveData();
    }
}
