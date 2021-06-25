<?php 
/* 
- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

/**
 * @author Riccardo <email@email.com>
 * @copyright 2021 Riccardo
 */
class Movie
{
    public $title;
    public $yearOfRelease;
    public $rating;
    public $nowInCinemas = false;

    function __construct(string $title, int $yearOfRelease, int $rating, bool $nowInCinemas) {
        $this->title = $title;
        $this->yearOfRelease = $yearOfRelease;
        $this->rating = $rating;
        $this->nowInCinemas = $nowInCinemas;
    }

    public function getTitle() {
        return $this->title;
    }
};



$movies = [
    new Movie('Star Wars', 2021, 10, true),
    new Movie('Topolino e pippo', 2010, 6, true),
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie OOP</title>
</head>
<body>
    <main>
        <?php foreach ($movies as $movie): ?>
            <div class="movie">
                <h1><?= $movie->title ?></h1>
                <h2><?= $movie->yearOfRelease?></h2>
                <h2><?= $movie->rating?></h2>
                <?php if($movie->nowInCinemas):?>
                    <h3>Now in all cinemas!</h3>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </main>    



</body>
</html>