<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Database\Database;

class UsersController extends Controller {
  public function index() {
    $users = Database::$queryBuilder->select(['name', 'email'])->from('users')->get();

    $data = [
      'title' => 'Users',
      'users' => $users
    ];
    $this->render('index', $data);
  }
}
