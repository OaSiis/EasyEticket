<?php

/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';

/** @var \Doctrine\ORM\EntityRepository $articleRepository */
$articleRepository = $em->getRepository('PandumWeb\Init\Article');

/** @var \PandumWeb\Init\Article $article */
$event = $eventRepository->find(!empty($_GET['id']) ? $_GET['id'] : 1);


$em->flush();