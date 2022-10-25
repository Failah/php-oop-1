<!-- 
    
CONSEGNA:

Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 

-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>php-oop-1-Valerio</title>
</head>

<body>

    <?php
    class Movie
    {
        public $title;
        public $year;
        public $genre;
        public $poster;
        public $synopsis;

        function __construct($_title, $_genre, $_synopsis)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->synopsis = $_synopsis;
        }

        public function something()
        {
        }

        public function __set($name, $value)
        {
            throw new Exception("Cannot add new property \$$name to instance of " . __CLASS__);
        }
    }


    ?>

</body>

</html>