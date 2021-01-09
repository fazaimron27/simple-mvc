<?php

use Phinx\Migration\AbstractMigration;

class CreateRolesTable extends AbstractMigration
{
    public function up()
    {
        $users = $this->table('roles', ['id' => 'id']);
        $users->addColumn('name', 'string')
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->save();
    }

    public function down()
    {
        $this->table('roles')->drop()->save();
    }
}
