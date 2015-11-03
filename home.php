<?php

require __DIR__.'/_header.php';

if (empty($_SESSION['connected'])) {
    header('Location: login.php');
}


$homeConnected = $_SESSION['connected'];

$homeSession = $_SESSION;

echo $twig->render('home.html.twig', [
    'homeConnected' => $homeConnected,
    'homeSession' => $homeSession,
]);