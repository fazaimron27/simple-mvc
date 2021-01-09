<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'username' => 'user',
                'email' => 'user@user.com',
                'password' => password_hash('user', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        $user = $this->table('users');
        $user->insert($data)
            ->saveData();
    }
}
