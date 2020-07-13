<?php
    $name = 'Balint';

    $day = date("l");
    $greeting;

    if ($day == 'Monday') {
        global $greeting;
        $greeting = 'Happy Monday!';
    } else {
        global $greeting;
        $greeting = 'Have a nice day!';
    }



    /* switch ($day) {
        case 'Monday':
          echo 'Today is Monday!';
          break;
        case 'Tuesday':
          echo 'Today is Tuesday!';
          break;
        case 'Wednesday':
          echo 'Today is Wednesday!';
          break;
        case 'Thursday':
            echo 'Today is Thursday!';
            break;
        case 'Friday':
            echo'Today is Firday!';
            break;
        case 'Saturday':
            echo 'Today is Wednesday!';
            break;
        case 'Sunday':
            echo 'Today is Sunday';
        default:
            echo 'What???';
        } */
       
    $numbersArray = range(0, 10);

    /* Multi array */

    $multiArr = array(
        "Goku" => array
        (
        "weapon" => "Kamehameha",
        "origin" => "Dragon Ball",
        "race"  => 'Sayan'
        ),
        "Yusuke" =>  array
        (
        "weapon" => "Ray-Gun",
        "origin" => "Yu-Yu Hakusho",
        "race"  => 'Spiritually-Endowed Human-Demon Hybrid'
        ),
        "Cloud" =>  array
        (
        "weapon" => "Buster Sword",
        "origin" => "FFVII",
        "race" => 'Human'
        )
        );
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Php Day 1</title>
</head>
<body>
    <div class="box">
        <?php
        echo "<h1>${name}</h1>
            <p>${greeting}</p>";
        ?>
    </div>
    <div class="for">
        <h1>For</h1>
        <?php
            for ($i = 0; $i < 50; $i++) {
                echo "<p>${name}</p>";
            }
        ?>
    </div>
    <div class="while">
        <h1>While</h1>
        <?php
            $i = 0;
            while ($i < 50) {
                echo "<p>${name}</p>";
                $i++;
            }
        ?>
    </div>

    <div class="do-while">
        <h1>Do While</h1>
        <?php
            $z = 0;
            do {
                echo "<p>${name}</p>";
                $z++;
            }
            while ($z < 50);
        ?>
    </div>

    <div class="foreach">
        <h1>ForEach</h1>
        <?php
            foreach($numbersArray as $number) {
                echo "<p>${number}</p>";
            }
        ?>
    </div>

    <div class="multiArray">
        <h1>Multi Array</h1>
        <?php
            echo 'Goku is a ' . $multiArr['Goku']['race'] . ' from ' . $multiArr['Goku']['origin'] . ' likes to use ' . $multiArr['Goku']['weapon'] . ".<br>";
            echo 'Yusuke is a ' . $multiArr['Yusuke']['race'] . ' from ' . $multiArr['Yusuke']['origin'] . ' likes to use ' . $multiArr['Yusuke']['weapon'] . ".<br>";
            echo 'Cloud is a ' . $multiArr['Cloud']['race'] . ' from ' . $multiArr['Cloud']['origin'] . ' likes to use ' . $multiArr['Cloud']['weapon'] . ".<br>";
        ?>
    </div>
    
</body>
</html>
