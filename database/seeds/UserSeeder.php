<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => password_hash('admin', PASSWORD_DEFAULT),
                'role_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'user',
                'email' => 'user@user.com',
                'password' => password_hash('user', PASSWORD_DEFAULT),
                'role_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        $user = $this->table('users');
        $user->insert($data)
            ->saveData();
    }
}
