<?php

  require_once __DIR__ . '/models/Movies.php';

  $allMovies = [
    new Movies('the lord of the rings', 'Peter Jackson' ,'2h 58m', new YearAndCover(2002, 'yes')),
    new Movies('Forrest Gump', 'Robert Zemeckis' ,'2h 22m',new YearAndCover(1994, 'yes')),
    new Movies('The Green Mile', 'Frank Darabont' ,'3h 09m',new YearAndCover(1999, 'yes')),
  ];

   // var_dump($allMovies[0]->getMovieInfo())
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

  <div class="container mt-5">
    <h1>Movies</h1>
  <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Director</th>
      <th scope="col">Timing</th>
      <th scope="col">Year</th>
      <th scope="col">Cover</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($allMovies as $Movie): ?>
      <tr>
        <th scope="row"><?php echo $Movie -> title ?></th>
        <td> <?php echo $Movie -> director ?> </td>
        <td> <?php echo $Movie -> timing ?> </td>
        <td> <?php echo $Movie -> YearAndCover -> year ?> </td>
        <td> <?php echo $Movie -> YearAndCover -> cover ?> </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  </div>

</body>
</html>