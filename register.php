<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/_header.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem([
    __DIR__.'/view',
]);

use PandumWeb\eticket\src\User;
session_start();
/**
 * Protection
 */
if (!empty($_SESSION['connected'])) {
//echo 'Forbidden !';
    header('Location: index.php');
    die;
}
/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';
$username = !empty($_POST['username']) ? $_POST['username'] : null;
$password = !empty($_POST['password']) ? $_POST['password'] : null;
$email= !empty($_POST['email']) ? $_POST['email'] : null;
/**
 * SignUp
 */
if (null !== $username && null !== $password && null !== $email) {
$user = new TrainerModel();
$user
->setUsername($username)
->setPassword($password)
->setPassword($email)
;
$em->persist($user);
$em->flush();
echo 'User created!';
}
/**
 * Login
 */
if (!empty($username) && empty($password)) {
    /** @var \Doctrine\ORM\EntityRepository $userRepository */
    $userRepository = $em->getRepository('PandumWeb\eticket\src\User');
    /** @var TrainerModel|null $user */
    $user = $userRepository->findOneBy([
        'username' => $username,
        'password' => $password,
    ]);
    if (!empty($user)) {
        $_SESSION['id'] = $user->getId();
        $_SESSION['username'] = $user->getUsername();
        $_SESSION['connected'] = true;
        header("location: index.php");
    }
}
$twig = new Twig_Environment($loader,[
//'cache' => null,
]);
echo $twig->render('register.html.twig');