<?php 

class Movie {

    public $Title;
    public $Type;
    public $ImagePath;
    public $Vote = 0;

    public function __construct($Title, $Type, $ImagePath = null, $Vote)
    {
        $this->Title = $Title;
        $this->Type = $Type;
        $this->ImagePath = $ImagePath;
        $this->Vote = $Vote;
    }

    public function getCard() {
        echo '<div class="card">';
        echo '<img src="' . $this->ImagePath . '" alt="" srcset="">';
        echo '<div class= "text-center">';
        echo '<h2>' . $this->Title . '</h2>';
        echo '<h3>' . $this->Type . '</h3>';
        echo '<h5>' . $this->Vote . '</h5>';
        echo '</div>';
        echo '</div>';
    }

}

$FirstMovie = new Movie('Inexorable', 'Thriller', 'https://www.themoviedb.org/t/p/w1280/iiclsw6zgRJz5D5Cc6sn4Cs9GQo.jpg', 3);
$SecondMovie = new Movie('Minions 2 - Come Gru diventa cattivissimo', 'Animazione', 'https://www.themoviedb.org/t/p/w1280/l8wQX5pmPh33uRTTToBscNcspRr.jpg', 4);
$thirdMovie = new Movie('Beast', 'Avventura', 'https://www.themoviedb.org/t/p/w1280/iRV0IB5xQeOymuGGUBarTecQVAl.jpg', 4);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-card">
        <?php 
            echo $FirstMovie->getCard();
            echo $SecondMovie->getCard();
            echo $thirdMovie->getCard(); 
        ?>
    </div>
</body>
</html>




