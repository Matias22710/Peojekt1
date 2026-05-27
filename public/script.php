<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\Core\Database;
use App\Repositories\UserRepository;
use App\Models\User;

$db = new Database();

$pdo = $db->getConnection();

$userRepo = new UserRepository($pdo);

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"])){
    switch ($_POST["action"]) {
        case 'info':
            # code...
            break;
        case 'delete':
            $userRepo->delete($_POST["id"]);
            header("Location:index.php");
            break;
        case 'update':
            # code...
            break;

        
    }
}
// $user = $userRepo->findByUsername("Majo");
// var_dump($user);

// $user = new User("Alex","Alex","user",false);
// $userRepo->save($user);

// $user_0 = $userRepo->findByUsername("Adam");
// $user = new User("Alex","Alex","Admin",false);
// $user->setId($user_0->getId());
// $userRepo->update($user);


