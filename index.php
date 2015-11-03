<?php

require __DIR__.'/_header.php';

/** Protection */
if (!empty($_SESSION['connected'])) {
    header('Location: home.php');
}

echo $twig->render('index.html.twig', [
]);


