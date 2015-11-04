<?php

/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';

/** @var \Doctrine\ORM\EntityRepository $eventRepository */
$eventRepository = $em->getRepository('ABC\eticket\Event');

/** @var ABC\eticket\Event $event */
$event = $eventRepository->find(!empty($_GET['id']) ? $_GET['id'] : 1);

if (null !== $event)
    $em->remove($event);

$em->flush();

header('location: admin.php');