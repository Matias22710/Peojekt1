<?php

require_once __DIR__ . "/../vendor/autoload.php";

session_start();

use App\Core\Database;
use App\Repositories\UserRepository;
use App\Models\User;

$db = new Database();

$pdo = $db->getConnection();

$userRepo = new UserRepository($pdo);

// $user = $userRepo->findByUsername("Majo");
// var_dump($user);

// $user = new User("Alex","Alex","user",false);
// $userRepo->save($user);

// $user_0 = $userRepo->findByUsername("Adam");
// $user = new User("Alex","Alex","Admin",false);
// $user->setId($user_0->getId());
// $userRepo->update($user);


// $user = $userRepo->findByUsername("Majo");
// $userRepo->delete($user->getId());

$users =$userRepo->findAll();

include __DIR__ ."/../views/home.php";
?>