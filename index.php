<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

/*
    Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

class Movie {
    public $title;
    public $genre;
    public $director;
    public $time;

    public function setFormat($format){
        if($format == 'hours'){
            $this->time = 60;
        }

        else $this->time = 120;
    }

    public function getTime() {
        return $this->time;
    }

}

$pulpFiction = new Movie();
$goodfellas = new Movie();

$pulpFiction->title = 'Pulp Fiction';
$goodfellas->title = 'Good Fellas';

$pulpFiction->setFormat('minutes');
//$pulpFiction->time = 154;
$goodfellas->time = 146;


var_dump($pulpFiction);
echo '<br>';
var_dump($goodfellas);

?>

</body>
</html>


