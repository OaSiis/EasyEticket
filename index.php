<?php
require __DIR__.'/vendor/autoload.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem([
    __DIR__.'/view',
]);
/** @var $em \Doctrine\ORM\EntityManager */
$em = require __DIR__.'/bootstrap.php';
session_start();
$twig = new Twig_Environment($loader,[
//'cache' => null,
]);
if(isset($_SESSION["username"]))
{
    $userRepository = $em->getRepository('PandumWeb\eticket\src\User');

    $uset = $userRepository->find($_SESSION['id']);
    echo $twig->render('index.html.twig', [
        "session" => $_SESSION,
        "username" => $_SESSION["username"],
   
    ]);
} else
{
    echo $twig->render('index.html.twig', [
        "session" => $_SESSION,
    ]);
}