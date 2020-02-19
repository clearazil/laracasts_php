<?php

namespace Controllers;

use Core\Database\QueryBuilder;
use Core\App;

class UsersController
{
    /**
     * @return void
     */
    public function index()
    {
        /** @var QueryBuilder $db */
        $db = App::get('database');

        $users = $db->selectAll('users');

        return view('users', [
            'users' => $users,
        ]);
    }

    /**
     * @return void
     */
    public function store()
    {
        /** @var QueryBuilder $db */
        $db = App::get('database');

        $db->insert('users', [
            'name' => $_POST['name'],
        ]);

        redirect('users');
    }
}
