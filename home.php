<?php

require __DIR__.'/_header.php';

if (empty($_SESSION['connected'])) {
    header('Location: login.php');
}


$homeConnected = $_SESSION['connected'];

$homeSession = $_SESSION;

$eventRepository = $em->getRepository('ABC\eticket\Event');
$events = $eventRepository->findAll();

echo $twig->render('home.html.twig', [
    'homeConnected' => $homeConnected,
    'homeSession' => $homeSession,
    'events' => $events,
]);
