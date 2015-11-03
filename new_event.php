<?php

require __DIR__.'/_header.php';

if (empty($_SESSION['connected'])) {
    header('Location: login.php');}
if ( $_SESSION['role'] == 0) {
    header('Location: home.php');
}

use ABC\eticket\Event;

$eventRepository = $em->getRepository('ABC\eticket\Event');



$name = !empty($_POST['name']) ? $_POST['name'] : null;
$description = !empty($_POST['description']) ? $_POST['description'] : null;
$date = !empty($_POST['date']) ? $_POST['date'] : null;
$picture = !empty($_POST['picture']) ? $_POST['picture'] : null;


/**
 * Create a new event
 */
if (null !== $name){

    $event= new Event();
    $event
        ->setName($name)
        ->setDescription($description)
        ->setDate(new \DateTime($date))
        ->setPicture($picture)
    ;

    $em->persist($event);
    $em->flush();
    header('location:admin.php');
}
;

$homeConnected = $_SESSION['connected'];

$homeSession = $_SESSION;

echo $twig->render('new_event.html.twig', [
    'homeConnected' => $homeConnected,
    'homeSession' => $homeSession,
]);
