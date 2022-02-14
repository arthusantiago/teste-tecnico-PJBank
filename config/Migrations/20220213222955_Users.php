<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Users extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('users')
        ->addColumn('name', 'string', ['limit' => 50, 'null' => false])
        ->addColumn('username', 'string', ['limit' => 50, 'null' => false])
        ->addColumn('email', 'string', ['limit' => 100, 'null' => false])
        ->addColumn('password', 'string', ['limit' => 255, 'null' => false])
        ->addColumn('zipcode', 'string', ['limit' => 8, 'null' => false])
        ->addColumn('created', 'datetime')
        ->addColumn('modified', 'datetime')
        ->create();
    }
}
