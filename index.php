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

    function __construct(string $title, int $yearOfRelease, int $rating) {
        $this->title = $title;
        $this->yearOfRelease = $yearOfRelease;
        $this->rating = $rating;
    }

    public function getTitle() {
        return $this->title;
    }
};

$starWars = new Movie('Star Wars', 2021, 10, true);
$topolino = new Movie('Topolino e pippo', 2010, 6);
?>