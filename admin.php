<?php
require __DIR__.'/_header.php';

if (empty($_SESSION['connected'])) {
    header('Location: login.php');}
if ( $_SESSION['role'] == 0) {
	header('Location: home.php');
}

$homeConnected = $_SESSION['connected'];

$homeSession = $_SESSION;

$Admin = $_SESSION['role'] == 1;

$eventRepository = $em->getRepository('ABC\eticket\Event');
$events = $eventRepository->findAll();



$event_remove="";


echo $twig->render('admin.html.twig', [
    'homeConnected' => $homeConnected,
    'homeSession' => $homeSession,
    'admin' => $Admin,
    'events' => $events,
]);

