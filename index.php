<?php 

class Movie {

    public $Title;
    public $Type;
    public $ImagePath;
    private $Vote = 0;

    public function __construct($Title, $Type, $ImagePath = null)
    {
        $this->Title = $Title;
        $this->Type = $Type;
        $this->ImagePath = $ImagePath;
        $this->Vote = $this->getRandNumber();
        
    }

    public function getRandNumber(){
        try{
            return rand(1,5);
        } catch (Exception $e){
            return 0;
        };
    }

    public function getCard() {

        echo '<div class="card">';
        echo '<img src="' . $this->ImagePath . '" alt="" srcset="">';
        echo '<div class= "text-center">';
        echo '<h2>' . $this->Title . '</h2>';
        echo '<h3>' . $this->Type . '</h3>';
        $this->getVoteStar($this->Vote);
        echo '</div>';
        echo '</div>';
    }

    public function getVoteStar($numberVote){

        if ($numberVote != null) {

            for ($i=0; $i < $numberVote; $i++) { 
                echo '<i class="fa-solid fa-star"></i>';
            }
    
            $restVote = 5 - $numberVote;
    
            if ($restVote > 0) {
                for ($i=0; $i < $restVote; $i++) { 
                    echo '<i class="fa-regular fa-star"></i>';
                }
            }
        } else {
            throw new Exception('No vote');
        }
        
    }

}

$FirstMovie = new Movie('Inexorable', 'Thriller', 'https://www.themoviedb.org/t/p/w1280/iiclsw6zgRJz5D5Cc6sn4Cs9GQo.jpg');
$SecondMovie = new Movie('Minions 2 - Come Gru diventa cattivissimo', 'Animazione', 'https://www.themoviedb.org/t/p/w1280/l8wQX5pmPh33uRTTToBscNcspRr.jpg');
$thirdMovie = new Movie('Beast', 'Avventura', 'https://www.themoviedb.org/t/p/w1280/iRV0IB5xQeOymuGGUBarTecQVAl.jpg');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Cards with OOP</title>
</head>
<body>
    <h1 class="text-center">Cards OOP</h1>
    <div class="container-card">
        <?php 
            echo $FirstMovie->getCard();
            echo $SecondMovie->getCard();
            echo $thirdMovie->getCard(); 
        ?>
    </div>
</body>
</html>




