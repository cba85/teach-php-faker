<?php

require __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');

//$db = new PDO('mysql:host=localhost;dbname=site', 'root', '');

//$db->query('DELETE FROM articles');

foreach(range(1, 100) as $i) {
    $createdAt = $faker->iso8601();
    echo $createdAt;
    $title = $faker->sentences(10);
    print_r($title);
    $body = '<p>' . implode('<p></p>', $faker->paragraphs(10)) . '</p>';
    echo $body;

    //$db->query("INSERT INTO articles (created, title, body) VALUES ('{$faker->sentences(10)}', '{$body}', '{$faker->iso8601}')");
}