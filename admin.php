<?php
require __DIR__.'/_header.php';

if (empty($_SESSION['connected'])) {
    header('Location: login.php');}
if ( $_SESSION['role'] == 0) {
	header('Location: home.php');
}
var_dump($_SESSION);
$homeConnected = $_SESSION['connected'];

$homeSession = $_SESSION;

echo $twig->render('home.html.twig', [
    'homeConnected' => $homeConnected,
    'homeSession' => $homeSession,
]);

