<?php

require __DIR__.'/_header.php';


/** Protection */
if (!empty($_SESSION['connected'] && $role == 1)) {
    header('Location: admin.php');
}

use \ABC\eticket\User;

$trainerCreate= '';
$username = !empty($_POST['username']) ? $_POST['username'] : null;
$password = !empty($_POST['password']) ? $_POST['password'] : null;
$email = !empty($_POST['email']) ? $_POST['email'] : null;

/**
 * SignIn
 */
if (null !== $username && null !== $password && null !== $email){

    $user= new User();
    $user
        ->setUsername($username)
        ->setPassword($password)
        ->setEmail($email)
    ;

    $trainerCreate = true;
    $em->persist($user);
    $em->flush();
}


echo $twig->render('register.html.twig', [
    'trainerCreate' => $trainerCreate
]);
