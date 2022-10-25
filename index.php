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
    <link rel="stylesheet" href="style.css">
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

        function __construct($_title, $_genre, $_posterName)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->createPoster($_posterName);
        }

        public function createPoster($_posterName)
        {
            $this->poster = '<img src="img/' . $_posterName . '.jpg" alt="">';
        }

        public function __set($name, $value)
        {
            throw new Exception("Cannot add new property \$$name to instance of " . __CLASS__);
        }
    }

    $fightClub = new Movie('Fight Club', 'Drama', 'fightclub');
    $fightClub->year = '1999';
    $fightClub->synopsis = 'Il protagonista è un uomo il cui vero nome non è mai pronunciato. Lavora come consulente nel ramo assicurativo di un\'importante casa automobilistica. Si tratta dello stereotipo del cittadino medio: frustrato dal lavoro, schiavo del consumismo, depresso, insonne, ansioso e stordito dal jet lag. L\'uomo trova un\'apparente cura ai suoi problemi solo cominciando a frequentare gruppi d\'ascolto per persone affette da mali incurabili; in questo modo incontra anche Marla Singer, una ragazza che come lui finge di avere gravi malattie.';

    $avatar2009 = new Movie('Avatar', 'Action', 'avatar');
    $avatar2009->year = '2009';
    $avatar2009->synopsis = 'Nel 2154, una compagnia interplanetaria terrestre, la RDA, è da alcuni anni all\'opera su Pandora, un mondo primordiale ricoperto da foreste pluviali, le cui flora e fauna sono di dimensioni superiori rispetto a quelle terrestri. Tra le specie del pianeta ve n\'è una di umanoidi chiamati Na\'vi. Essendo l\'atmosfera tossica per gli umani, sono stati sviluppati gli avatar, cioè ibridi creati in laboratorio con geni umani e geni Na\'vi; ogni avatar può essere utilizzato e controllato solo dall\'essere umano il cui DNA è stato impiegato per comporlo. Il collegamento viene effettuato grazie a una speciale capsula tecnologica, dove il soggetto trasferisce coscienza e anima nell\'avatar.';

    ?>

    <div class="container text-white mt-5">
        <div class="row">
            <div id="fightclub" class="col d-flex flex-column border border-primary">
                <h2><?php echo $fightClub->title ?></h2>
                <div><?php echo $fightClub->poster ?></div>
                <div><?php echo $fightClub->genre ?></div>
                <div><?php echo $fightClub->year ?></div>
                <div class="w-75"><?php echo $fightClub->synopsis ?></div>
            </div>
            <div id="avatar2009" class="col d-flex flex-column border border-primary">
                <h2><?php echo $avatar2009->title ?></h2>
                <div><?php echo $avatar2009->poster ?></div>
                <div><?php echo $avatar2009->genre ?></div>
                <div><?php echo $avatar2009->year ?></div>
                <div class="w-75"><?php echo $avatar2009->synopsis ?></div>
            </div>
        </div>
    </div>

</body>

</html>