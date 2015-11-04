<?php
require __DIR__.'/_header.php';

if (empty($_SESSION['connected'])) {
    header('Location: login.php');}

$homeConnected = $_SESSION['connected'];

$homeSession = $_SESSION;


$eventRepository = $em->getRepository('ABC\eticket\Event');
$event = new \ABC\eticket\Event();
$events = $eventRepository->find(array('id' => $_GET['id']));


echo $twig->render('event.html.twig', [
    'homeConnected' => $homeConnected,
    'homeSession' => $homeSession,
    'event' => $events,
]);