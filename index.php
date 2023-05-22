<?php

  require_once __DIR__ . '/models/Movies.php';

  $allMovies = [
    new Movies('the lord of the rings', 'Peter Jackson' ,'2h 58m'),
    new Movies('Forrest Gump', 'Robert Zemeckis' ,'2h 22m'),
    new Movies('The Green Mile', 'Frank Darabont' ,'3h 09m'),
  ];

    var_dump($allMovies[0]->getMovieInfo())
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>PHP OOP - 1</title>
</head>
<body>
  

</body>
</html>