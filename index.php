<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

#initializin curl session; cr= CURL handle
$ch = curl_init(API_URL);

#Setting to receive the result and not showing it on screen

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

#Executing petition and saving result
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);




?>

<head>
  <meta charset="UTF-8">
  <title>Next Marvel movie</title>

  <meta name="description" content="next marvel movie">
  <meta name="description2" content="next ucm movie">
  <meta name="viewport" content="width=width device- with, initial-scale=1.0">
  <!-- Centered viewport -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
  <h1>Next Marvel movie!!!</h1>
  <section>
    <img src=" <?= $data["poster_url"]; ?> " width=" 200" alt=" Poster de <?= $data["title"]; ?>" />
  </section>
  <hgroup>
    <h3><?= $data["title"]; ?> release in <?= $data["days_until"];  ?> days</h3>
    <p> Realese date: <?= $data["release_date"] ?></p>
    <p> Next will be: <?= $data["following_production"]["title"] ?></p>
  </hgroup>

</main>


<style>
  main {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    text-align: center;
  }

  :root {
    color-scheme: light dark;

  }

  body {
    display: grid;
    place-content: center;
  }
</style>