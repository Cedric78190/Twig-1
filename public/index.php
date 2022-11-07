<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require_once 'products.php';


$name = 'Wilder';

echo $twig->render('products.html.twig', ['product' => $products]);

